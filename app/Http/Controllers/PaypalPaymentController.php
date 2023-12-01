<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Mail\OrderMail;
use App\Models\{Order};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Epmnzava\PaypalLaravel\PaypalLaravel as Paypal;

class PaypalPaymentController extends Controller
{
    public static function paypalPay(Request $request, $order_id)
    {
        // dd("hello");
        $description = "Test";

        $orderDetails = Order::whereId($order_id)->first();
        $paypal_payments = new Paypal;
        $total_amount = (int)($orderDetails->amount);
        $tax = 0;
        $shipping = 0;
        $handling_fee = 0;
        $response = $paypal_payments->CreatePayment($total_amount, $tax, $shipping, $handling_fee, $description);

        // payment Id
        $payment_id = $response["payment_id"];

        $paymentDetails = [
            'orderId' => $order_id,
            'payment_id' => $payment_id,
        ];
        session()->put('paymentDetails', $paymentDetails);
        return redirect($response["checkout_link"]);
    }

    public function success(Request $request)
    {
        $paypal = new Paypal;
        $response = $paypal->executePayment($request->paymentId, $request->PayerID);
        
        if (json_decode($response)->state == "approved") {
            /**
             * Update db if payment done 
             */

            if(Session::get('paymentDetails') == null){
                return redirect('/');
            }
    
            Order::whereId(Session::get("paymentDetails.orderId"))->update([
                'payment_gateway_id' => Session::get("paymentDetails.payment_id"),
                'status' => 'Success',
            ]);

            $data = Order::find(Session::get("paymentDetails.orderId"));

            ////// Mail Send

            // test51@yopmail.com

            // safikul.islam1@webart.technology
    
            Mail::to('test51@yopmail.com')->send(new OrderMail($data));
    
            Cart::where('user_id', Auth::id())->delete();
    
            return view('user.success');

        } else {
            /**
             * If payment is not approved
             */
            
            session()->put('paymentFail', 'fail');
            return redirect('fail');

        }
    }
}
