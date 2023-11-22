<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
   
    public function login(){

        if(Auth::check() && Auth::User()->roles()->first()->name === 'Admin'){
            return Redirect::to('/admin/dashboard');
        }

        return view('admin.login');
    }

    public function dashboard(){

        return view('admin.dashboard');
    } 


    public function login_action(Request $request)
    {

        $request->validate([
            'email'         => 'required|email',
            'password'      => 'required|min:8',
        ]);

       $user = User::role(['Admin'])->where('email', $request->email)->first();

        if ($user) {
            if (!Hash::check($request->password, $user->password)) {
                return redirect()->back()->with('error', 'Incorrect credentials');
            }else{

                $credentials = [
                    'email'     => $request->email,
                    'password'  => $request->password,
                ];

                if(Auth::attempt($credentials) == true){
                 return redirect('admin/dashboard');
                }else{
                 return redirect()->back()->with('error', 'Incorrect credentials');
                }
            }
        }else{

            return redirect()->back()->with('error', 'Incorrect credentials');
            
        }
    }


    public function logout()
    {
        Auth::logout();
        return Redirect::to('/admin/login');
    }


    public function user_list()
    {
        return view('admin.user-list');
    }

    public function user_edit($id)
    {
        $user = User::withTrashed()->find($id);
        return view('admin.user-edit', compact('user'));
    }

    

    public function user_edit_action(Request $request)
    {
        try {
            
            $validator   =  Validator::make($request->all(), [
                'name'              => 'required',
                'email'             => 'required',
                'mobile'            => 'required',
                'status'            => 'required',
                'id'                => 'required',
            ]);
            
            if ($validator->fails())
            {
                return response()->json(['status' => 'errors', 'message'=>$validator->errors()->all()]);
            }
    
            $mobileCheck = User::whereNot('id', $request->id)->where('mobile', $request->mobile)->count();
            $emailCheck  = User::whereNot('id', $request->id)->where('email',  $request->email)->count();
    
            if($emailCheck > 0){
                return response()->json(['status' => 'error', 'message'=> 'Email already taken']);
            }
    
            if($mobileCheck > 0){
                return response()->json(['status' => 'error', 'message'=> 'Mobile already taken']);
            }
    
    
            $data = [
                'name'     => $request->name,
                'email'    => $request->email,
                'mobile'   => $request->mobile,
                'status'   => $request->status,
            ];
            
    
            User::where('id', $request->id)->update($data);

            return response()->json(['status' => 'success', 'type' => 'update', 'message'=> 'User data update successfully']);

        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message'=> 'Server Error Please Try Again']);
        }
    }

    public function user_soft_delete(Request $request, $id)
    {
        try {
            $record = User::find($id);
            $record->delete();
    
            return response()->json(['status' => 'success', 'message'=> 'User delete successfully']);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message'=> 'Server Error Please Try Again']);
        }
    }

    public function user_restore_delete(Request $request, $id)
    {
        try {
            $record = User::withTrashed()->find($id);
            $record->restore();
    
            return response()->json(['status' => 'success', 'message'=> 'User Restore successfully']);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message'=> 'Server Error Please Try Again']);
        }
    }


    
    

}
