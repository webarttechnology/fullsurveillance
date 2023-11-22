<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product-image-list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product-image-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $validator   =  Validator::make($request->all(), [
                'product'           => 'required',
                'color'             => 'required',
                'image'             => 'required|file|mimes:jpeg,png,jpg,webp|max:2048',
                'status'            => 'required',
            ]);
            
            if ($validator->fails())
            {
                return response()->json(['status' => 'errors', 'message'=>$validator->errors()->all()]);
            }

            if(isset($request->image)){
                $file = $request->file('image');
                $new_file = rand().'_'.$file->getClientOriginalName();
                $destinationPath = public_path('admin/img/product');
                $file->move($destinationPath, $new_file);
                $image = url('/').'/admin/img/product/'.$new_file;
            }else{
                $image = null;
            }


            $data  = [
                'product_id'   => $request->product,
                'img'          => $image,
                'color'        => $request->color,
                'status'       => $request->status,
            ];

            ProductImage::create($data);

            return response()->json(['status' => 'success', 'type' => 'store', 'message'=> 'Product Image Add successfully!']);

          } catch (\Throwable $th) {
             return response()->json(['status' => 'error', 'message'=> 'Server Error Please Try Again']);
          }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductImage $productImage)
    {
        return view('admin.product-image-edit', compact('productImage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        try {

            $validator   =  Validator::make($request->all(), [
                'product'           => 'required',
                'color'             => 'required',
                'status'            => 'required',
            ]);
            
            if ($validator->fails())
            {
                return response()->json(['status' => 'errors', 'message'=>$validator->errors()->all()]);
            }

            $productImage = ProductImage::find($id);

            if(isset($request->image)){

                $validator   =  Validator::make($request->all(), [
                    'image'             => 'required|file|mimes:jpeg,png,jpg,webp|max:2048',
                ]);

                if ($validator->fails())
                {
                    return response()->json(['status' => 'errors', 'message'=>$validator->errors()->all()]);
                }

                $file = $request->file('image');
                $new_file = rand().'_'.$file->getClientOriginalName();
                $destinationPath = public_path('admin/img/product');
                $file->move($destinationPath, $new_file);
                $image = url('/').'/admin/img/product/'.$new_file;

                $baseUrl =  url('/');
                $fullUrl = $productImage->img;

                // Remove the base URL
                $relativePath = str_replace($baseUrl, '', $fullUrl);

                unlink(public_path($relativePath));

            }else{
                $image = $request->old_image;
            }

            $data  = [
                'product_id'   => $request->product,
                'img'          => $image,
                'color'        => $request->color,
                'status'       => $request->status,
            ];

            ProductImage::where('id', $id)->update($data);

            return response()->json(['status' => 'success', 'type' => 'update', 'message'=> 'Product Image Update successfully!']);

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

            ProductImage::where('id', $id)->delete();

            return response()->json(['status' => 'success', 'message'=> 'Product Image delete successfully!']);

        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message'=> 'You can not delete this because it has assign subcategory']);
        }

    }
}
