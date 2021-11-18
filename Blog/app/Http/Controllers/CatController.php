<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Validator;

class CatController extends Controller
{
    //
    public function getPostTravel(Request $request) {
        $banners = DB::table('posts')->limit(6)->get();

        $cats = DB::table('category')->get();

        $cmts = [];

        foreach($banners as $banner) {
            $count_cmt = DB::table('comment')->count();
            
            array_push($cmts,[$banner->id,$count_cmt]);
        }
        $tags = DB::table('tag')->get();
        $posts = DB::table('posts')->select('posts.*')->join('category','category.id','=','posts.Id_Category')->paginate(4);
        //dd($posts);
        return view('SingleCat', ['banners' => $banners, 'cats' => $cats, 'cmts' => $cmts,'posts' => $posts,'tags' => $tags]);
    }

    public function filterPostTravel(Request $request) {
        if(request()->ajax()) {
            $banners = DB::table('posts')->limit(6)->get();
            $searchText = (!empty($_GET["searchText"])) ? ($_GET["searchText"]) : ('');
            $cats = DB::table('category')->get();

            $cmts = [];

            foreach($banners as $banner) {
                $count_cmt = DB::table('comment')->count();
                
                array_push($cmts,[$banner->id,$count_cmt]);
            }

            $tags = DB::table('tag')->get();
            $idTravel = DB::table('category')->where('Title','=','Travel')->get('id');
            $posts = DB::table('posts')->where('Title','like','%'.$searchText.'%')->where('Id_Category','=',$idTravel[0]->id)->paginate(2);
            
            return view('SubViews.SingleCatView',['posts' => $posts, 'tags' => $tags,'cmts' => $cmts,'cats' => $cats]);
        }
    }

    public function filterPostTravelTag(Request $request) {
        if(request()->ajax()) {
            $banners = DB::table('posts')->limit(6)->get();
            $tag = (!empty($_GET["tag"])) ? ($_GET["tag"]) : ('');
            $cats = DB::table('category')->get();

            $cmts = [];

            foreach($banners as $banner) {
                $count_cmt = DB::table('comment')->count();
                
                array_push($cmts,[$banner->id,$count_cmt]);
            }

            $tags = DB::table('tag')->get();
            $idTravel = DB::table('category')->where('Title','=','Travel')->get('id');
            $idTags = DB::table('tag')->where('Title','like',$tag.'%')->get('id');
            $posts = DB::table('posts')->where('Id_Tag','like','%'.$idTags[0]->id.'%')->where('Id_Category','=',$idTravel[0]->id)->paginate(2);
            
            return view('SubViews.SingleCatView',['posts' => $posts, 'tags' => $tags,'cmts' => $cmts,'cats' => $cats]);
        }
    }
}
