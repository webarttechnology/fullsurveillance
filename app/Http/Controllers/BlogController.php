<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs  = Blog::all();
        return view('admin.blog.blog-list', compact('blogs') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.blog-add' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try {

            $validator   =  Validator::make($request->all(), [
                'name'              => 'required|unique:blogs,name',
                'image'             => 'required|file|mimes:jpeg,png,jpg,webp|max:2048',
                'status'            => 'required',
                'desc'              => 'required',
            ]);
            
            if ($validator->fails())
            {
                return response()->json(['status' => 'errors', 'message'=>$validator->errors()->all()]);
            }

            if(isset($request->image)){
                $file = $request->file('image');
                $new_file = rand().'_'.$file->getClientOriginalName();
                $destinationPath = public_path('admin/img/blog');
                $file->move($destinationPath, $new_file);
                $image = url('/').'/admin/img/blog/'.$new_file;
            }else{
                $image = null;
            }

            
            $data  = [
                'name'          => $request->name,
                'slug'          => Str::slug($request->name),
                'img'           => $image,
                'desc'          => $request->desc,
                'status'        => $request->status,
            ];

            Blog::create($data);

            return response()->json(['status' => 'success', 'type' => 'store', 'message'=> 'Blog Add successfully!']);

          } catch (\Throwable $th) {
             return response()->json(['status' => 'error', 'message'=> 'Server Error Please Try Again']);
          }

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.blog-edit', compact('blog') );
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
                'desc'              => 'required',
            ]);
            
            if ($validator->fails())
            {
                return response()->json(['status' => 'errors', 'message'=>$validator->errors()->all()]);
            }


            $blog = Blog::find($id);

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
                $destinationPath = public_path('admin/img/blog');
                $file->move($destinationPath, $new_file);
                $image = url('/').'/admin/img/blog/'.$new_file;

                $baseUrl =  url('/');
                $fullUrl = $blog->img;

                // Remove the base URL
                $relativePath = str_replace($baseUrl, '', $fullUrl);

                unlink(public_path($relativePath));

            }else{
                $image = $request->old_image;
            }

            $data  = [
                'name'          => $request->name,
                'img'           => $image,
                'desc'          => $request->desc,
                'status'        => $request->status,
            ];

            Blog::where('id', $id)->update($data);

            return response()->json(['status' => 'success', 'type' => 'update', 'message'=> 'Blog Update successfully!']);

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
            Blog::where('id', $id)->delete();
            return response()->json(['status' => 'success', 'message'=> 'Blog delete successfully!']);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message'=> 'Server Error Please Try Again']);
        }
    }
}
