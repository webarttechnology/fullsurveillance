<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Stripe\Charge;
use Stripe\Stripe;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\OrderShipAddress;
use App\Models\OrderBillingAddress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\PaypalPaymentController;

class CheckoutControler extends Controller
{

    public function checkout()
    {
       
         if(cart_total_amount() == 0){
            return redirect('/');
         }

        return view('user.check-out');
    }

    public function apply_coupon(Request $request)
    {
       
        if($request->coupon == null){
            return response()->json(['status' => 'error', 'message'=> 'Coupon filed is required']);
        }

        if(Coupon::where('coupon_name', $request->coupon)->where('status', 'Active')->count() == 0){
            return response()->json(['status' => 'error', 'message'=> 'Coupon does not exist']);
        }

        $now    = Carbon::now();

        $coupon = Coupon::where('coupon_name', $request->coupon)
                ->whereDate('start_date', '<=', $now)
                ->whereDate('end_date', '>=', $now)
                ->where('status', 'Active')
                ->first();

        if($coupon){
            if( $coupon->minimum_amount <= cart_total_amount() ){
                if($coupon->type == 'Percentage'){
                    $amount_discount = $coupon->amount*cart_total_amount()/100;
                    if($coupon->maximum_discount_amount >= $amount_discount){
                        $amount = (int)$amount_discount;
                    }else{
                        $amount =  (int)$coupon->maximum_discount_amount;
                    }
                }else{
                    $amount =  (int)$coupon->amount;
                }

                $data = [
                    'coupon_discount_amount'    => $amount,
                    'cart_amount'               => cart_total_amount(),
                    'payable_amount'            => cart_total_amount() - $amount,
                ];

                return response()->json(['status' => 'success', 'message'=> 'Congratulation has been apply', 'data' =>  $data ]);

            }else{
                return response()->json(['status' => 'error', 'message'=> 'Minimum order amount $'.$coupon->minimum_amount.' ']);
            }
        }else{
            return response()->json(['status' => 'error', 'message'=> 'This coupon code has expired']);
        }
    }

    public function order(Request $request)
    {

        // dd($request->all());

        // dd($request->shipping);

        $request->validate([
            'first_name'        => 'required',
            'last_name'         => 'required',
            'country'           => 'required',
            'street_address'    => 'required',
            'town'              => 'required',
            'district'          => 'required',
            'postcode'          => 'required',
            'phone'             => 'required',
            'email'             => 'required|email',
        ]);

        if($request->shipping == 'check'){
            $request->validate([
                'ship_first_name'        => 'required',
                'ship_last_name'         => 'required',
                'ship_country'           => 'required',
                'ship_street_address'    => 'required',
                'ship_town'              => 'required',
                'ship_district'          => 'required',
                'ship_postcode'          => 'required',
                'ship_phone'             => 'required',
                'ship_email'             => 'required|email',
            ]);
        }

         $total_cart_amount = cart_total_amount();

         if($total_cart_amount == 0){
            return redirect()->back()->with('error', 'Invalid request');
         }

         $payable_amount = 0;

        ////// Coupon ////
         $amount  = 0;

        if($request->coupon){

            $now    = Carbon::now();

            $coupon = Coupon::where('coupon_name', $request->coupon)
                    ->whereDate('start_date', '<=', $now)
                    ->whereDate('end_date', '>=', $now)
                    ->where('status', 'Active')
                    ->first();
    
            if($coupon){
                if( $coupon->minimum_amount <= $total_cart_amount ){
                    if($coupon->type == 'Percentage'){
                        $amount_discount = $coupon->amount*$total_cart_amount/100;
                        if($coupon->maximum_discount_amount >= $amount_discount){
                            $amount = (int)$amount_discount;
                        }else{
                            $amount =  (int)$coupon->maximum_discount_amount;
                        }
                    }else{
                        $amount =  (int)$coupon->amount;
                    }

                    $payable_amount = $total_cart_amount - $amount;
    
                }else{
                    return redirect()->back()->with('error', 'Minimum order amount $'.$coupon->minimum_amount.' ');
                }
                $coupon_id   = $coupon->id;
            }else{
                return redirect()->back()->with('error', 'This coupon code has expired');
            }
           
        }else{
            $coupon_id   = null;
            $payable_amount = $total_cart_amount;
        }

        ///// End Coupon ////

        ////// Order 

         $order_data = [
            'user_id'           => Auth::id(),
            'coupon_id'         => $coupon_id ?? null,
            'amount'            => $total_cart_amount,
            'coupon_amount'     => $amount,
            'payable_amount'    => $payable_amount,
            'order_generate_id' => random_int(100000, 999999),
            'payment_gateway_id'=> null,
            'order_note'        => $request->message,
            'method'            => $request->payment_method,
            'type'              => 'Online',
            'status'            => 'Pending',
        ];

        $order = Order::create($order_data);

        ////// Order Billing Address

        $order_billing_address = [
            'user_id'           => Auth::id(),
            'order_id'          => $order->id,
            'f_name'            => $request->first_name,
            'l_name'            => $request->last_name,
            'company_name'      => $request->company_name,
            'country'           => $request->country,
            'street'            => $request->street_address,
            'city'              => $request->town,
            'district'          => $request->district,
            'zip'               => $request->postcode,
            'mobile'            => $request->phone,
            'email'             => $request->email,
        ];

        OrderBillingAddress::create($order_billing_address);


        ////// Order Shiping Address

        if($request->shipping == 'check'){
             ///// Ship Different Adress
            $order_ship_address = [
                'user_id'           => Auth::id(),
                'order_id'          => $order->id,
                'f_name'            => $request->ship_first_name,
                'l_name'            => $request->ship_last_name,
                'company_name'      => $request->ship_company_name,
                'country'           => $request->ship_country,
                'street'            => $request->ship_street_address,
                'city'              => $request->ship_town,
                'district'          => $request->ship_district,
                'zip'               => $request->ship_postcode,
                'mobile'            => $request->ship_phone,
                'email'             => $request->ship_email,
            ];

        }else{
             ///// Ship Adress Same to billing address
            $order_ship_address = $order_billing_address;
        }

        OrderShipAddress::create($order_ship_address);

        //// Order Details

        foreach (get_cart_details() as  $value) {
            
            $order_details = [
                'user_id'           => Auth::id(),
                'order_id'          => $order->id,
                'product_id'        => $value->product_id,
                'product_name'      => $value->product->name,
                'amount'            => $value->product->discount_price,
                'quantity'          => $value->quantity,
                'total_amount'      => $value->product->discount_price * $value->quantity,
            ];

            OrderDetail::create($order_details);
            
        }

        //  dd($payable_amount);

        if($request->payment_method == "stripe"){
            $link = StripeController::StripePay($request, $order->id, $payable_amount);
            return $link;
        }


        if($request->payment_method  == "paypal"){
            $link = PaypalPaymentController::paypalPay($request, $order->id);
            return $link;
        }

    }







    

}
