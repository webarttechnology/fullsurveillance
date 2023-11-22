<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.sub-category-list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sub-category-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $validator   =  Validator::make($request->all(), [
                'category'          => 'required',
                'name'              => 'required',
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
                $destinationPath = public_path('admin/img/subcategory');
                $file->move($destinationPath, $new_file);
                $image = url('/').'/admin/img/subcategory/'.$new_file;
            }else{
                $image = null;
            }


            $data  = [
                'category_id'   => $request->category,
                'name'          => $request->name,
                'img'           => $image,
                'status'        => $request->status,
            ];

            SubCategory::create($data);

            return response()->json(['status' => 'success', 'type' => 'store', 'message'=> 'Sub Category Add successfully!']);

          } catch (\Throwable $th) {
             return response()->json(['status' => 'error', 'message'=> 'Server Error Please Try Again']);
          }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
        return view('admin.sub-category-edit', compact('subCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {

            $validator   =  Validator::make($request->all(), [
                'category'          => 'required',
                'name'              => 'required',
                'status'            => 'required',
            ]);
            
            if ($validator->fails())
            {
                return response()->json(['status' => 'errors', 'message'=>$validator->errors()->all()]);
            }

            $subcategory = SubCategory::find($id);

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
                $destinationPath = public_path('admin/img/category');
                $file->move($destinationPath, $new_file);
                $image = url('/').'/admin/img/category/'.$new_file;

                $baseUrl =  url('/');
                $fullUrl = $subcategory->img;

                // Remove the base URL
                $relativePath = str_replace($baseUrl, '', $fullUrl);

                unlink(public_path($relativePath));

            }else{
                $image = $request->old_image;
            }

            $data  = [
                'category_id'   => $request->category,
                'name'          => $request->name,
                'img'           => $image,
                'status'        => $request->status,
            ];

            SubCategory::where('id', $id)->update($data);

            return response()->json(['status' => 'success', 'type' => 'update', 'message'=> 'Sub Category Update successfully!']);

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

            SubCategory::where('id', $id)->delete();

            return response()->json(['status' => 'success', 'message'=> 'SubCategory delete successfully!']);

        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message'=> 'You can not delete this because it has assign subcategory']);
        }

    }
}
