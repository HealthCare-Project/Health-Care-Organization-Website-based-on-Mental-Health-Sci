<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\FamousCaseInsert;
class FamousCaseInsertController extends Controller
{
    //
    public function insertform(){
        return view('famouscasesinsert');
        }
        public function insert(Request $request){
        $title = $request->input('title');
        $feature_image = $request->input('feature_image');
        $publish_date = $request->input('publish_date');
        $content = $request->input('content');
        $data=array('title'=>$title,"feature_image"=>$feature_image,"publish_date"=>$publish_date,"content"=>$content );
        DB::table('famous_cases')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/famouscasesinsert">Click Here</a> to go back.';
        }
        }