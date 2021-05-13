<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintController extends Controller
{
    public function __construct(){
    #    $this->middleware('auth:doctor')->only("index", "show");
     #   $this->middleware('auth:patient')->only("create", "show");

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
        $id = $complaint->id;
        return redirect()->route('show.complaint', [$id=> $id]);

    }
    public function show($id){
        #the logged in patient can only see his own post
        if(auth()->guard('patient')->check()){
            if (Complaint::findOrFail($id)->patient->id == auth()->guard('patient')->user()->id){
                return view('complaints.show', [
                'complaint' => Complaint::findOrFail($id),
            ]);}
            else{
                return redirect("/");
            };
        }elseif (auth()->guard('doctor')->check()) {
            return view('complaints.show', ['complaint' => Complaint::findOrFail($id),]);       
        }
    }

}