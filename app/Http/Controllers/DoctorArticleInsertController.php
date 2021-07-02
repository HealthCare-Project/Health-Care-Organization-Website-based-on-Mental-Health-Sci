<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\DoctorArticleInsert;
class DoctorArticleInsertController extends Controller
{
    //
    public function insertform(){
        return view('doctorarticlesinsert');
        }
        public function insert(Request $request){
        $title = $request->input('title');
        $feature_image = $request->input('feature_image');
        $publish_date = $request->input('publish_date');
        $content = $request->input('content');
        $data=array('title'=>$title,"feature_image"=>$feature_image,"publish_date"=>$publish_date,"content"=>$content );
        DB::table('doctor_articles')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/doctorarticlesinsert">Click Here</a> to go back.';
        }
        }