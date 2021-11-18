<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Lay thong tin hien thi len trang home
    public function index() {
        $banners = DB::table('posts')->limit(6)->get();
        
        $cats = DB::table('category')->get();

        $cmts = [];

        foreach($banners as $banner) {
            $count_cmt = DB::table('comment')->where('ID_Post','=',$banner->id)->count();
            
            array_push($cmts,[$banner->id,$count_cmt]);
        }

        $recent_posts =  DB::table('posts')->limit(4)->orderBy('Created_at','desc')->get();

        $tags = [];
        foreach($recent_posts as $recent_post) {
            //echo ($recent_post->Id_Tag."<br>");
            $tag = DB::table('tag')->where('id','=',$recent_post->Id_Tag)->get('Title');
            
            //echo ($tag[0]->Title."<br>");
            array_push($tags,[$recent_post->id,$tag[0]->Title]);
        }
        $popular_posts = DB::table('posts')->limit(6)->orderBy('Views','desc')->get();
        //dd($tags[0]);
        return view('main', ['banners' => $banners, 'cats' => $cats , 'cmts' => $cmts , 'tags' => $tags , 
            'recent_posts' => $recent_posts, 'popular_posts' => $popular_posts ]);
    }
}
