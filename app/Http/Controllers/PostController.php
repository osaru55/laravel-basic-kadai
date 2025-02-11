<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        // postテーブルからすべてのデータを取得し、変数$postsに代入する
        $posts =DB::table('posts')->select('title','content')->get();
        
        // 変数$postをpostsをposts/index.blade.phpファイルに渡す 
        return view('posts.index',compact('posts'));
    }
}

