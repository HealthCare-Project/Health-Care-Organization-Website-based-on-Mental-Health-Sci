<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComplaintComment;
use App\Models\Complaint;

class ComplaintsCommentsController extends Controller
{
    function store(Request $request, $id){
      	$validated = $request->validate([
      	   	'description' => "required",
      	 ]);

        if(auth()->guard('doctor')->check()){
          if(empty(Complaint::findOrFail($id)->doctor_id)){
            $complaint = Complaint::findOrFail($id);
            $complaint->doctor_id = auth()->guard('doctor')->user()->id;
            $complaint->save();
          }else{
              return back();
          }
        }

          $comment = ComplaintComment::create([
              'description' => request('description'),
              'complaint_id' => $id,
          ]);

        if(auth()->guard('patient')->check()){
        	$comment->patient_id = auth()->guard('patient')->user()->id;
        }
        elseif(auth()->guard('doctor')->check()) {
        	$comment->doctor_id = auth()->guard('doctor')->user()->id;
        }
        $comment->save();
        return back();
      }
}

