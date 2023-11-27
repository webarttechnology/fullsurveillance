<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutControler extends Controller
{

    public function chekout()
    {
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



    

}
