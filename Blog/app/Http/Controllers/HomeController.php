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

        $recent_posts =  DB::table('posts')->limit(4)->orderBy('Created_at')->get();
        foreach($recent_posts as $recent_post) {
            print($recent_post->Id_Category);
        }
        //dd($recent_posts);
        return view('main', ['banners' => $banners, 'cats' => $cats , 'cmts' => $cmts , 'recent_posts' => $recent_posts,
                    ]);
    }
}
