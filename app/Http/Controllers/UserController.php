<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Ratings;
use App\Models\Category;
use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\OrderDetail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    

    public function index(){


        // dd(cart_count());

        // dd(Str::uuid());

        // dd(Auth::User()->roles()->first()->name);

        $data['product'] = Product::orderBy('id', 'desc')->get();

        return view('user.welcome', $data);
    } 

    public function about_us(){

        return view('user.about-us');
    } 

    public function service(Request $request){

        $data['categories'] = Category::get();
        


        if($request->sort == 'low'){
            $data['product']  = Product::orderBy('discount_price', 'desc')->paginate(10);
        }elseif($request->sort == 'high'){
            $data['product']  = Product::orderBy('discount_price', 'asc')->paginate(10);
        }else{
            $data['product']    = Product::orderBy('id', 'desc')->paginate(10); 
        }

        return view('user.service', $data);
    } 


    public function contact(){

        return view('user.contact');
    } 

    public function product(){

        return view('user.product');
    } 

    public function shop(Request $request){

        $cate        = $request->cate;
        $minPrice    = (int)$request->min;
        $maxPrice    = (int)$request->max;

        $data['categories'] = Category::get();

        if($cate){

            if($minPrice && $maxPrice){

                $data['product'] = Product::orderBy('id', 'desc')->whereBetween('discount_price', [$minPrice, $maxPrice])->whereHas('category', function ($query) use ($cate) {
                    $query->where('name', $cate);
                 })->paginate(10);

            }else{
                $data['product'] = Product::orderBy('id', 'desc')->whereHas('category', function ($query) use ($cate) {
                    $query->where('name', $cate);
              })->paginate(10);
            }

           
        }else{

            if($minPrice && $maxPrice){
                $data['product'] = Product::whereBetween('discount_price', [$minPrice, $maxPrice])->orderBy('id', 'desc')->paginate(10);
                $products = Product::whereBetween('discount_price',  [$minPrice, $maxPrice])->paginate(10);
            }else{
                $data['product']  = Product::orderBy('id', 'desc')->paginate(10);
            }
        }

        if($request->sort == 'low'){
            $data['product']  = Product::orderBy('discount_price', 'desc')->paginate(10);
        }elseif($request->sort == 'high'){
            $data['product']  = Product::orderBy('discount_price', 'asc')->paginate(10);
        }else{
            $data['product']  = Product::orderBy('id', 'desc')->paginate(10); 
        }

        return view('user.shop', $data);
    } 


    public function item($id){

        $data['product']    = Product::find($id);
        $data['rating'] = Ratings::where('product_id', $data['product']->id)->pluck('star_rating');
        $data['review'] = Ratings::where('product_id', $data['product']->id)->whereNotNull('comment')->pluck('comment');
        $data['allreview'] = Ratings::with('user_data')->where('product_id', $data['product']->id)->get();
        $data['averageRating'] =$data['rating']->avg();

        return view('user.product', $data);
    } 


    public function login_register(){

        if(Auth::check() == true){
            return Redirect::to('/');
        }

        return view('user.login-register');
    } 

    public function register_action(Request $request){

        $request->validate([
            'name'          => 'required',
            'mobile'        => 'required|digits:10|unique:users,mobile',
            'email'         => 'required|unique:users,email|email',
            'password'      => 'required|min:8|confirmed',
        ]);

        $data = [
            'name'          => $request->name,
            'email'         => $request->email,
            'mobile'        => $request->mobile,
            'password'      => Hash::make($request->password),
            'status'        => 'Active',
        ];

        $user =  User::create($data);

        // Role assign at registration time
        $user->assignRole('User');

         if($user){
            return response()->json(['status' => 'success', 'msg' => 'Your account create successfully!']);
         }

         return response()->json(['status' => 'error', 'msg' => 'Server error please try again!']);

    } 


    public function login_action(Request $request){

        // dd($request->all());

        $request->validate([
            'email'         => 'required|email',
            'password'      => 'required|min:6',
        ]);

       $user = User::role(['User'])->where('email', $request->email)->withTrashed()->first();

        if ($user) {
            if (!Hash::check($request->password, $user->password)) {
                return response()->json(['status' => 'error', 'type' => 'login', 'msg' => 'Incorrect credentials']);
            }else{

                if($user->status == 'Inactive'){
                    return response()->json(['status' => 'error', 'type' => 'login', 'msg' => 'Your account has been inactive please contact our support']);
                }

                if($user->deleted_at !=  null){
                    return response()->json(['status' => 'error', 'type' => 'login', 'msg' => 'Your account has been suspended please contact our support']);
                }

                $credentials = [
                    'email'     => $request->email,
                    'password'  => $request->password,
                ];

                if(Auth::attempt($credentials) == true){

                if(Cart::where('uuid', Session::get('uuid'))->count() > 0){
                    Cart::where('uuid', Session::get('uuid'))->update(['user_id' => Auth::id(),  'uuid' => null ]);
                }
                    
                $url = url('/');
                return response()->json(['status' => 'success', 'type' => 'login', 'url' => $url,'msg' => 'Your login successfully!']);

                }else{
                    return response()->json(['status' => 'error', 'type' => 'login', 'msg' => 'Incorrect credentials']);
                }
            }
        }else{
            return response()->json(['status' => 'error', 'type' => 'login', 'msg' => 'Incorrect credentials']);
        }

    } 

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    public function get_product_view(Request $request)
    {

        $productView = Product::find($request->id);
        return view('user.data.product-quick-view', compact('productView'))->render();
    }

    public function search(Request $request)
    {

        $keyword   = $request->s;
        $cate      = $request->cate;

        $data['categories'] = Category::get();

         if($cate){

             if($cate == 'all'){
                $data['product']   = Product::orderBy('id', 'desc')->where('name', 'like', '%' . $keyword . '%')->paginate(10);
             }else{
                $data['product']   = Product::orderBy('id', 'desc')->where('name', 'like', '%' . $keyword . '%')->whereHas('category', function ($query) use ($cate) {
                                            $query->where('name', $cate);
                                     })->paginate(10);
             }

         }else{
               $data['product']    = Product::orderBy('id', 'desc')->where('name', 'like', '%' . $keyword . '%')->paginate(10);
         }

        return view('user.search', $data);
    }
   
    

    public function contact_send(Request $request){

        $request->validate([
            'name'          => 'required',
            'email'         => 'required|email',
            'subject'       => 'required',
            'message'       => 'required',
        ]);

        $data = [
            'name'          => $request->name,
            'email'         => $request->email,
            'subject'       => $request->subject,
            'message'       => $request->message,
            'status'        => 'Pending',
        ];

        $user =  Contact::create($data);

        Mail::to('safikul.islam1@webart.technology')->send(new ContactMail($data));

         if($user){
            return response()->json(['status' => 'success', 'msg' => 'Thank you for reach us!']);
         }

         return response()->json(['status' => 'error', 'msg' => 'Server error please try again!']);

    } 


    public function myAccount(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $orders = Order::with('order_detail')->where('user_id', $user->id)->orderBy('id', 'desc')->where('status', 'Success')->get();
        return view('user.myaccount', compact('user','orders'));
    }

    public function checkPassword(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $currentPassword = $request->input('current_password');
        if (Hash::check($currentPassword, $user->password)) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }

    public function updateAccount(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'mobile'        => 'required|max:10',
            'email'         => 'required|email',
        ]);   
        try{
            $user = User::where('id',Auth::user()->id)->first();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            if($request->newPwd !=null && $request->currentPwd !=null){
                $user->password = bcrypt($request->newPwd);
            }
            $user->update();
            return redirect(url('/'));
          }catch(Exception $e){
            return response()->json(['status'=>false,'message'=>'User not Updated.','error'=>$e->getMessage()]);
          }
    }

    public function addRatings($prod_id){
        $product   = Product::where('id',$prod_id)->first();
        $checkrating = Ratings::where('user_id',Auth::user()->id)->where('product_id', $product->id)->first();
        return view('user.product-rating', compact('product','checkrating'));
    } 

    public function getAllProducts(Request $request)
    {
        $orderdetail = OrderDetail::where('user_id',Auth::user()->id)->where('order_id',$request->id)->get();
        return view('user.data.allproduct-list', compact('orderdetail'))->render();
    }

    public function blog(){

        $blog = Blog::where('status', 'Active')->paginate(10);

        return view('user.blog', compact('blog'));
    } 

    

    public function blog_detail($slug){

        $blog = Blog::where('status', 'Active')->where('slug', $slug)->first();

        if( $blog  == null){
            return Redirect::to('/');
        }

        return view('user.blog-detail', compact('blog'));
    }
    

}
