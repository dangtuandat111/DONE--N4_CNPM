<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Validator;

class CatController extends Controller
{
    //
    public function getPost(Request $request) {
        $banners = DB::table('posts')->limit(6)->get();

        $cats = DB::table('category')->get();

        $cmts = [];

        foreach($banners as $banner) {
            $count_cmt = DB::table('comment')->where('ID_Post','=',$banner->id)->count();
            
            array_push($cmts,[$banner->id,$count_cmt]);
        }

        return view('SingleCat', ['banners' => $banners, 'cats' => $cats, 'cmts' => $cmts]);
    }
}
