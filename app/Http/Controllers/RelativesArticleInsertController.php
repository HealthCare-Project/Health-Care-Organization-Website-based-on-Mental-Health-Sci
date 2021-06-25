<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\RelativesArticleInsert;
class RelativesArticleInsertController extends Controller
{
    //
    public function insertform(){
        return view('relativesarticlesinsert');
        }
        public function insert(Request $request){
        $title = $request->input('title');
        $feature_image = $request->input('feature_image');
        $publish_date = $request->input('publish_date');
        $content = $request->input('content');
        $data=array('title'=>$title,"feature_image"=>$feature_image,"publish_date"=>$publish_date,"content"=>$content );
        DB::table('relatives_articles')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/relativesarticlesinsert">Click Here</a> to go back.';
        }
        }