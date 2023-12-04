<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Compare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartControler extends Controller
{
    
    public function cart()
    {
        return view('user.cart');
    }


    public function add_cart(Request $request)
    {

        try {

            $data = [
                'product_id'   => $request->id,
                'quantity'     => 1,
            ];
    
            add_cart($data);
    
            return response()->json(['status' => 'success', 'msg' => 'Item add successfully in cart']);
            
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'msg' => 'Server error please try again!']);
        }

    }

    public function update_remove_cart(Request $request)
    {

        try {

            $data = [
                'product_id'   => $request->id,
                'quantity'     => $request->qty,
            ];
    
            update_remove_cart($data);

            if($request->qty == 0){
                $msg = 'Item remove successfully in cart';
            }else{
                $msg = 'Item update successfully in cart';
            }
    
            return response()->json(['status' => 'success', 'msg' =>  $msg ]);
            
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'msg' => 'Server error please try again!']);
        }

    }



    public function total_cart_count(Request $request)
    {

       echo cart_count();

    }

    public function refresh_cart(Request $request)
    {

        return view('user.data.cart-data')->render();

    }

    public function sub_grand_total_cart(Request $request)
    {

        return view('user.data.subtotal-data')->render();

    }

    public function  add_wishlist(Request $request)
    {

        try {
    
            $response = add_wishlist($request->id);

            if( $response == 'add'){
                $msg = 'Item add in wishlist';
            }else{
                $msg = 'Item remove in wishlist';
            }
    
            return response()->json(['status' => 'success', 'type' => $response, 'msg' => $msg ]);
            
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'msg' => 'Server error please try again!']);
        }

    }
    
    public function wishlist()
    {
        return view('user.wishlist');
    }

    
    public function total_wishlist_count(Request $request)
    {

       echo wishlist_count();

    }

    public function cart_total_amount(Request $request)
    {

       echo  cart_total_amount();

    }


    public function compareProduct()
    {
        // $item = Compare::where('user_id',Auth::user()->id)->get();
        $item = Compare::with('product')->where('user_id',Auth::user()->id)->get();
        return view('user.compareProduct',compact('item'));
    }


    public function add_comparelist(Request $request)
    {
    // dd($request->id);
        try {
        $checkdata = Compare::where('user_id',Auth::user()->id)->where('product_id',$request->id)->first();
        if($checkdata==null){
        $existingComparisonsCount = Compare::where('user_id', Auth::user()->id)->count();
        if ($existingComparisonsCount < 3) {
        $savecompare = new Compare();
        $savecompare->user_id = Auth::id();
        $savecompare->product_id = $request->id;
        $savecompare->save();
        }
        }
        return response()->json(['status' => 'success', 'msg' => 'Add to Compared List']);
        } catch (\Throwable $th) {
        return response()->json(['status' => 'error', 'msg' => 'Server error please try again!']);
        }

    }

    public function remove_comparelist($id)
    {
        $removedata = Compare::where('user_id',Auth::user()->id)->where('id',$id)->first();
        $removedata->delete();
        $checkindex = Compare::where('user_id',Auth::user()->id)->first();
        if($checkindex==null){
            return redirect(url('/'));
        }else{
            return back();
        }
    }

    


}
