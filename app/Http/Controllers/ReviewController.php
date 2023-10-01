<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create()
    {
        return view('review.create');
    }
   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'score' => 'required|integer',
            'review' => 'required|string',
        ]);
    
        Review::create($validatedData);
        
        return redirect('/dashboard')->with('flash_message', 'Review Added!');
    }
}
