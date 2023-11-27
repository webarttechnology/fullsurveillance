<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.coupon-list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.coupon-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try {

            $validator   =  Validator::make($request->all(), [
                'name'              => 'required|unique:coupons,coupon_name',
                'amount'            => 'required',
                'start'             => 'required',
                'expired'           => 'required',
                'type'              => 'required',
                'status'            => 'required',
                'minimum_amount'    => 'required',
            ]);
            
            if ($validator->fails())
            {
                return response()->json(['status' => 'errors', 'message'=>$validator->errors()->all()]);
            }

            if( $request->type == 'Percentage'){

                $validator   =  Validator::make($request->all(), [
                    'maximum_discount_amount'    => 'required',
                ]);
                
                if ($validator->fails())
                {
                    return response()->json(['status' => 'errors', 'message'=>$validator->errors()->all()]);
                }

                $maximum_discount = $request->maximum_discount_amount;

            }else{
                $maximum_discount = null;
            }
            
            $data  = [
                'coupon_name'           => $request->name,
                'amount'                => $request->amount,
                'start_date'            => $request->start,
                'end_date'              => $request->expired,
                'minimum_amount'        => $request->minimum_amount,
                'maximum_discount_amount' => $maximum_discount,
                'type'                  => $request->type,
                'status'                => $request->status,
            ];

            Coupon::create($data);

            return response()->json(['status' => 'success', 'type' => 'store', 'message'=> 'Coupon Add successfully!']);

          } catch (\Throwable $th) {
             return response()->json(['status' => 'error', 'message'=> 'Server Error Please Try Again']);
          }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon)
    {
        return view('admin.coupon-edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {

            $validator   =  Validator::make($request->all(), [
                'name'              => 'required',
                'amount'            => 'required',
                'start'             => 'required',
                'expired'           => 'required',
                'type'              => 'required',
                'status'            => 'required',
                'minimum_amount'    => 'required',
            ]);
            
            if ($validator->fails())
            {
                return response()->json(['status' => 'errors', 'message'=>$validator->errors()->all()]);
            }

            $check = Coupon::where('coupon_name', $request->name)->whereNot('id', $id)->count();

            if( $check > 0){
             return response()->json(['status' => 'error', 'message'=> 'Coupon already exist']);
            }

            if( $request->type == 'Percentage'){

                $validator   =  Validator::make($request->all(), [
                    'maximum_discount_amount'    => 'required',
                ]);
                
                if ($validator->fails())
                {
                    return response()->json(['status' => 'errors', 'message'=>$validator->errors()->all()]);
                }

                $maximum_discount = $request->maximum_discount_amount;

            }else{
                $maximum_discount = null;
            }
            
            $data  = [
                'coupon_name'           => $request->name,
                'amount'                => $request->amount,
                'start_date'            => $request->start,
                'end_date'              => $request->expired,
                'minimum_amount'        => $request->minimum_amount,
                'maximum_discount_amount' => $maximum_discount,
                'type'                  => $request->type,
                'status'                => $request->status,
            ];

            Coupon::where('id', $id)->update($data);

            return response()->json(['status' => 'success', 'type' => 'update', 'message'=> 'Coupon Update successfully!']);

          } catch (\Throwable $th) {
             return response()->json(['status' => 'error', 'message'=> 'Server Error Please Try Again']);
          }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Coupon::where('id', $id)->delete();
            return response()->json(['status' => 'success', 'message'=> 'Coupon delete successfully!']);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message'=> 'Server Error Please Try Again']);
        }
    }

}
