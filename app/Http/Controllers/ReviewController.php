<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    
    public function index() {

        return view('reviews.allReviews', ['reviews' => Review::paginate(5)]);

    }

    public function create() {

        return view('reviews.create');

    }

    public function store(Request $req) {

        $this->validate(request(), [

            'title' => 'required',

            'review_body' => 'required'
        ]);


        $review = new Review();
        $review->user_id = Auth::user()->id;
        $review->title = $req->input('title');
        $review->review_body = $req->input('review_body');
        $review->moderated = 0;

        $review->save();

        return redirect()->route('home');

    }

}
