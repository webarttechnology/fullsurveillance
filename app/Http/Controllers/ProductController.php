<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product-list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try {

            $validator   =  Validator::make($request->all(), [
                'category'          => 'required',
                'subcategory'       => 'required',
                'name'              => 'required',
                'desc'              => 'required',
                'status'            => 'required',
                'actual_price'      => 'required',
                'discount_price'    => 'required',
            ]);
            
            if ($validator->fails())
            {
                return response()->json(['status' => 'errors', 'message'=>$validator->errors()->all()]);
            }

            $data  = [
                'category_id'       => $request->category,
                'sub_category_id'   => $request->subcategory,
                'name'              => $request->name,
                'actual_price'      => $request->actual_price,
                'discount_price'    => $request->discount_price,
                'desc'              => $request->desc,
                'status'            => $request->status,
            ];

            Product::create($data);

            return response()->json(['status' => 'success', 'type' => 'store', 'message'=> 'Product Add successfully!']);

          } catch (\Throwable $th) {
             return response()->json(['status' => 'error', 'message'=> 'Server Error Please Try Again']);
          }
    }

    /**
     * Show the form for editing the specified resource.
     * 
     */
    public function edit(Product $product)
    {
        return view('admin.product-edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {

            $validator   =  Validator::make($request->all(), [
                'category'          => 'required',
                'subcategory'       => 'required',
                'name'              => 'required',
                'desc'              => 'required',
                'status'            => 'required',
                'actual_price'      => 'required',
                'discount_price'    => 'required',
            ]);
            
            if ($validator->fails())
            {
                return response()->json(['status' => 'errors', 'message'=>$validator->errors()->all()]);
            }

            $data  = [
                'category_id'       => $request->category,
                'sub_category_id'   => $request->subcategory,
                'name'              => $request->name,
                'actual_price'      => $request->actual_price,
                'discount_price'    => $request->discount_price,
                'desc'              => $request->desc,
                'status'            => $request->status,
            ];

            Product::where('id', $id)->update($data);

            return response()->json(['status' => 'success', 'type' => 'update', 'message'=> 'Product update successfully!']);

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

            Product::where('id', $id)->delete();

            return response()->json(['status' => 'success', 'message'=> 'Product delete successfully!']);

        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message'=> 'You can not delete this because it has assign subcategory']);
        }

    }


    public function get_subcategory(Request $request)
    {

       $subcategory = SubCategory::where('category_id', $request->id)->get();

       if(count($subcategory) > 0){
           return view('admin.data.sub-category-data', compact('subcategory'))->render();
       }else{
        return 0;
       }


    }
}
