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
        if (auth()->guard('doctor')->check()) {
           $complaints = Complaint::take(5)->get();
           return view('complaints.index', with(['complaints'=>$complaints]));
       }else{
           return redirect()->to('/')->with('warning','Access denied.');
       }
    }

    public function create(){
        if (auth()->guard('patient')->check()) {
            return view('complaints.create');
        }else{
                return redirect()->to('/')->with('warning','Access denied.');
        }
    }

    public function store(Request $request){
    	    $validated = $request->validate([
    	    	'description' => "required",
                'title' => "required",
    	    ]);

        $file = $this->saveImage($request->img, 'img');

        $complaint = Complaint::create([
            'title' => request('title'),
            'description' => request('description'),
            'patient_id' => auth()->guard('patient')->user()->id,
            'img' => $file,
        ]);
        $id = $complaint->id;
        return redirect()->route('show.complaint', [$id=> $id]);

    }
    public function show($id){


        if(auth()->guard('patient')->check()){
            if (Complaint::findOrFail($id)->patient->id == auth()->guard('patient')->user()->id){
                return view('complaints.show', [
                'complaint' => Complaint::findOrFail($id),
            ]);}
            else{
                return redirect("/")->with("warning", "Access denied.");
            };
        }elseif (auth()->guard('doctor')->check()) {
            return view('complaints.show', ['complaint' => Complaint::findOrFail($id),]);       
        }
    }

    public function saveImage($image, $path){
        $newImageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path($path), $newImageName);
         return $newImageName;
    }

    public function getDownload($id){
    //PDF file is stored under project/public/download/info.pdf
        $d1 = Complaint::find(1);
        return response()->download(public_path("img")."/1624890989.pdf");
    }

}