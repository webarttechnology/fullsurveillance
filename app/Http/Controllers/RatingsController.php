<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ratings;


class RatingsController extends Controller
{


    public function saveRating(Request $request)
    {
        // dd($request->all());
        // $ratingValue = $request->input('rating'); 
        // $productId = $request->input('prodid'); 
        $saverating = new Ratings();
        $saverating->user_id = Auth::user()->id;
        $saverating->product_id = intval($request->product_id);
        $saverating->star_rating = intval($request->rating);
        $saverating->comment = $request->comment;
        $saverating->status = "Active";
        $saverating->save();
        return redirect(url('/'));
        // return response()->json(['message' => 'Rating saved successfully']);
    }

    
}
