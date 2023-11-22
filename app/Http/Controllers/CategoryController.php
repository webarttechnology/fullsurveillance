<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category-list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

          try {

            $validator   =  Validator::make($request->all(), [
                'name'              => 'required|unique:categories,name',
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
                $destinationPath = public_path('admin/img/category');
                $file->move($destinationPath, $new_file);
                $image = url('/').'/admin/img/category/'.$new_file;
            }else{
                $image = null;
            }

            
            $data  = [
                'name'          => $request->name,
                'img'           => $image,
                'status'        => $request->status,
            ];

            Category::create($data);

            return response()->json(['status' => 'success', 'type' => 'store', 'message'=> 'Category Add successfully!']);

          } catch (\Throwable $th) {
             return response()->json(['status' => 'error', 'message'=> 'Server Error Please Try Again']);
          }
    }

    /**
     * Show the form for editing the specified resource.
     * 
     */
    public function edit(Category $category)
    {
        return view('admin.category-edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        try {

            $validator   =  Validator::make($request->all(), [
                'name'              => 'required',
                'status'            => 'required',
            ]);
            
            if ($validator->fails())
            {
                return response()->json(['status' => 'errors', 'message'=>$validator->errors()->all()]);
            }


            $category = Category::find($id);

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
                $fullUrl = $category->img;

                // Remove the base URL
                $relativePath = str_replace($baseUrl, '', $fullUrl);

                unlink(public_path($relativePath));

            }else{
                $image = $request->old_image;
            }

            $data  = [
                'name'   => $request->name,
                'img'    => $image,
                'status' => $request->status,
            ];

            Category::where('id', $id)->update($data);

            return response()->json(['status' => 'success', 'type' => 'update', 'message'=> 'Category Update successfully!']);

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

            Category::where('id', $id)->delete();

            return response()->json(['status' => 'success', 'message'=> 'Category delete successfully!']);

        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message'=> 'You can not delete this because it has assign subcategory']);
        }

    }
}
