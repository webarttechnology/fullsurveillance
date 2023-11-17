<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function index(){

        return view('user.welcome');
    } 

    public function about_us(){

        return view('user.about-us');
    } 

    public function service(){

        return view('user.service');
    } 


    public function contact(){

        return view('user.contact');
    } 

    public function product(){

        return view('user.product');
    } 


    

    


    

}
