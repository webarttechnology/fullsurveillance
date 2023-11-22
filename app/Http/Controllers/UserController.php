<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    

    public function index(){

        // dd(Auth::User()->roles()->first()->name);

        $data['product'] = Product::orderBy('id', 'desc')->get();

        return view('user.welcome', $data);
    } 

    public function about_us(){

        return view('user.about-us');
    } 

    public function service(){

        return view('user.service');
    } 


    public function contact(){

        return view('user.contact');
    } 

    public function product(){

        return view('user.product');
    } 

    public function shop(){

        $data['categories'] = Category::get();
        $data['product']    = Product::orderBy('id', 'desc')->paginate(10);

        return view('user.shop', $data);
    } 


    public function item($id){

        $data['product']    = Product::find($id);

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
            'password'      => 'required|min:8',
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


}
