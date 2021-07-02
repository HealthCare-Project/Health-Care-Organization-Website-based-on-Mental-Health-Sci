<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\NewsArticleInsert;
class NewsArticleInsertController extends Controller
{
    //
    public function insertform(){
        return view('newsarticlesinsert');
        }
        public function insert(Request $request){
        $title = $request->input('title');
        $feature_image = $request->input('feature_image');
        $publish_date = $request->input('publish_date');
        $content = $request->input('content');
        $data=array('title'=>$title,"feature_image"=>$feature_image,"publish_date"=>$publish_date,"content"=>$content );
        DB::table('news_articles')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/newsarticlesinsert">Click Here</a> to go back.';
        }
        }