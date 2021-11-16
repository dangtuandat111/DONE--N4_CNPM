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

        return view('SingleCat', ['banners' => $banners]);
    }
}
