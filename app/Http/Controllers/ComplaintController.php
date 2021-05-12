<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintController extends Controller
{
    public function __construct(){
        $this->middleware('auth:doctor')->only("index", "show");
        $this->middleware('auth:patient')->only("create");

    }

    public function index(){
       $complaints = Complaint::take(5)->get();
       return view('complaints.index', with(['complaints'=>$complaints]));
    }

    public function create(){
        if(auth()->guard('doctor')->check()){
            return redirect()->to('/');
        }elseif (auth()->guard('patient')->check()) {
            return view('complaints.create');
        }
    }

    public function store(Request $request){
    	    $validated = $request->validate([
    	    	'description' => "required",
                'title' => "required",
    	    ]);

        $complaint = Complaint::create([
            'title' => request('title'),
            'description' => request('description'),
            'patient_id' => auth()->guard('patient')->user()->id,
        ]);


     	return view("/");
    }
    public function show($id){

        return view('complaints.show', [
            'complaint' => Complaint::findOrFail($id)
        ]);
    }

}