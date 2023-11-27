<?php

use App\Models\Cart;
use App\Models\Wishlist;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

  
  
    function get_cart_details(){
      if (Auth::check() == true) {
          $data = Cart::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
      }else{
          $data = Cart::where('uuid', Session::get('uuid'))->whereNotNull('uuid')->orderBy('id', 'desc')->get();
      }
      return $data;
    }


  function cart_count(){
      if (Auth::check() == true) {
          $count = Cart::where('user_id', Auth::id())->count();
      }else{
          $count = Cart::where('uuid', Session::get('uuid'))->whereNotNull('uuid')->count();
      }
      return $count;
  }

  function add_cart($data){

    if (Auth::check() == true) {

        $cart_data  = [
          'product_id'   => $data['product_id'],
          'user_id'      => Auth::id(),
          'quantity'     => $data['quantity'],
        ];

       

        $cart = Cart::where('user_id', Auth::id())->where('product_id', $data['product_id'])->first();

        if($cart){
          $cart->quantity = $cart->quantity + 1;
          $cart->save();
        }else{
          Cart::create($cart_data);
        }

        $wishlist = Wishlist::where('user_id', Auth::id())->where('product_id', $data['product_id'])->first();

        if($wishlist){
          $wishlist->delete();
        }

    }else{

       if(Session::get('uuid')){
         $uuid   = Session::get('uuid');
       }else{
         $uuid   = Session::put('uuid', Str::uuid());
       }

        $cart_data  = [
          'product_id'   => $data['product_id'],
          'uuid'         => $uuid,
          'quantity'     => $data['quantity'],
        ];

        $cart = Cart::where('uuid', Session::get('uuid'))->where('product_id', $data['product_id'])->whereNotNull('uuid')->first();

        if($cart){
          $cart->quantity = $cart->quantity + 1;
          $cart->save();
        }else{
          Cart::create($cart_data);
        }

        $wishlist = Wishlist::where('uuid', Session::get('uuid'))->where('product_id', $data['product_id'])->whereNotNull('uuid')->first();

        if($wishlist){
          $wishlist->delete();
        }
    }
    return true;
}


function cart_count_per_product($product_id){
    if (Auth::check() == true) {
        $count = Cart::where('user_id', Auth::id())->where('product_id', $product_id)->sum('quantity');
    }else{
        $count = Cart::where('uuid', Session::get('uuid'))->where('product_id', $product_id)->whereNotNull('uuid')->sum('quantity');
    }
    return $count;
}



function  update_remove_cart($data){

  if (Auth::check() == true) {

      $cart_data  = [
        'quantity'     => $data['quantity']
      ];

      if($data['quantity'] > 0){
        Cart::where('user_id', Auth::id())->where('product_id', $data['product_id'])->update($cart_data);
      }else{
        Cart::where('user_id', Auth::id())->where('product_id', $data['product_id'])->delete();
      }

  }else{

     if(Session::get('uuid')){
       $uuid   = Session::get('uuid');
     }else{
       $uuid   = Session::put('uuid', Str::uuid());
     }

      $cart_data  = [
        'quantity'     => $data['quantity']
      ];

      if($data['quantity'] > 0){
        Cart::where('uuid', $uuid)->where('product_id', $data['product_id'])->update($cart_data);
      }else{
        Cart::where('uuid', $uuid)->where('product_id', $data['product_id'])->delete();
      }

  }

   return true;

}




function add_wishlist($product_id){

      if (Auth::check() == true) {

          $cart_data  = [
            'product_id'   => $product_id,
            'user_id'      => Auth::id(),
          ];

           $wishlist = Wishlist::where('user_id', Auth::id())->where('product_id', $product_id)->first();

           if($wishlist){
            $wishlist->delete();
            $msg  = 'remove';
           }else{
            Wishlist::create($cart_data);
            $msg  = 'add';
           }

      }else{

        if(Session::get('uuid')){
          $uuid   = Session::get('uuid');
        }else{
          $uuid   = Session::put('uuid', Str::uuid());
        }

          $cart_data  = [
            'product_id'   => $product_id,
            'uuid'         => $uuid,
          ];

          $wishlist = Wishlist::where('uuid', $uuid)->where('product_id', $product_id)->first();

          if($wishlist){
           $wishlist->delete();
           $msg  = 'remove';
          }else{
           Wishlist::create($cart_data);
           $msg  = 'add';
          }

      }

      return  $msg;
}


function wishlist_count(){
  if (Auth::check() == true) {
      $count = Wishlist::where('user_id', Auth::id())->count();
  }else{
      $count = Wishlist::where('uuid', Session::get('uuid'))->whereNotNull('uuid')->count();
  }
  return $count;
}

function get_wishlist_details(){
  if (Auth::check() == true) {
      $data = Wishlist::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
  }else{
      $data = Wishlist::where('uuid', Session::get('uuid'))->whereNotNull('uuid')->orderBy('id', 'desc')->get();
  }
  return $data;
}


function  cart_total_amount(){

  $data = Cart::where('user_id', Auth::id())->orderBy('id', 'desc')->get();

  $subTotal = [];
  foreach ($data as $value) {
        $subTotal[] = $value->product->discount_price * $value->quantity;
  }

  return array_sum($subTotal);
  
}