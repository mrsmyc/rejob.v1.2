<?php

namespace App\Http\Controllers;

use App\Review;
use App\UserReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class UserReviewController extends Controller
{
    public function index() {
        $reviews = Auth::user()->index->paginate(5);
        
        return view('user_reviews.user_reviews',['reviews' => $reviews] );
    }

    public function edit($id) {
        $review = Review::find($id);
        if(!$review) {
            return abort(404);
        }
        if($review->user_id == Auth::id())
        {
        return view('user_reviews.edit', compact('review'));
        }
        else
        {
            return redirect('myreviews');

        }
        

    }

    public function update(Request $request, $id) {
        $request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
        $review = Review::find($id);
        $review->title = $request->get('title');
        $review->review_body = $request->get('body');
        $review->save();
        
        return redirect()->route('myreviews');
    }
}
