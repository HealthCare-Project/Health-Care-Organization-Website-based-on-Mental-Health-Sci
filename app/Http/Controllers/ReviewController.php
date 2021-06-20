<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;
use App\Models\Review;
use App\Models\Doctor;


class ReviewController extends Controller
{
        function store(Request $request, $id){
            $validated = $request->validate([
                'description' => "required",
             ]);

            $review = Review::create([
                  'description' => request('description'),
                  'patient_id' => auth()->guard('patient')->user()->id,
                  'doctor_id' => $id,
            ]);
            $review->save();
            return back()->with("success", "Comment posted successfully.");


          }
}
