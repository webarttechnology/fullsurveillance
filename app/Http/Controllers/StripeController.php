<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Stripe\Exception\CardException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class StripeController extends Controller
{
    

    public static function StripePay(Request $request, $orderId, $amount){
        
        try {
            
            $stripe = new \Stripe\StripeClient('sk_test_51MmXfKSCgMR7q6bkWzyl3Im8Geip19fTgonFzBjR3SMcpsNhCE7tFvgR12g7fJCAd8ppSsFCmeRzRJIjYTNkVmSx009rBYW42x');
            $product = $stripe->products->create(['name' => 'FullSurveillance']);

            $price = $stripe->prices->create(
                [
                 'currency'     => 'usd',
                 'product'      => $product-> id,
                 "unit_amount"  => $amount * 100
                ]
             );
            
    
            $checkout = $stripe->checkout->sessions->create(
                [
                 'cancel_url' => url('cancel'),
                 'line_items' => [['price' => $price-> id, 'quantity' => 1]],
                 'mode' => 'payment',
                 'success_url' => url('success'),
                ]
             );

             $paymentIntent = $stripe->paymentIntents->create([
                'amount' => $amount * 100,
                'currency' => 'usd',
                'automatic_payment_methods' => ['enabled' => true],
             ]);

             $paymentDetails = [
                'orderId' => $orderId,
                'payment_id' => $paymentIntent,
             ];

             session()->put('paymentDetails', $paymentDetails);
             return Redirect::to($checkout['url']);

        }
        catch (CardException $e) {
            session()->put('paymentFail', 'fail');
            return redirect('fail');
            // return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function cancel(Request $request){
        return redirect('checkout');
    }

    public function fail(Request $request){
        if(Session::get('paymentFail') == null){
            return redirect('/');
        }

        return view('user.failer');
    }

    public function success(Request $request){

        if(Session::get('paymentDetails') == null){
            return redirect('/');
        }

        Order::whereId(Session::get("paymentDetails.orderId"))->update([
            'payment_gateway_id' => Session::get("paymentDetails.payment_id.id"),
            'status' => 'Success',
        ]);

        $data = Order::find(Session::get("paymentDetails.orderId"));

        ////// Mail Send

        Mail::to('test51@yopmail.com')->send(new OrderMail($data));

        //// Cart item remove

        Cart::where('user_id', Auth::id())->delete();

        return view('user.success');

    }


}
