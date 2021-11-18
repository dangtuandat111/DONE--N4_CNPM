<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\File;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment;
use League\CommonMark\Extension\HeadingPermalink\HeadingPermalinkExtension;
use League\CommonMark\Extension\TableOfContents\TableOfContentsExtension;
use League\CommonMark\Extension\InlinesOnly\InlinesOnlyExtension;
use League\CommonMark\Extension\Table\TableExtension;

$converter = new CommonMarkConverter([
    'html_input' => 'strip',
    'allow_unsafe_links' => false,
]);

$environment = Environment::createCommonMarkEnvironment();
$environment->addExtension(new HeadingPermalinkExtension());
$environment->addExtension(new TableOfContentsExtension());
$environment->addExtension(new TableExtension());
$environment->addExtension(new InlinesOnlyExtension());
// Set your configuration
$config = [
    'table_of_contents' => [
        'html_class' => 'table-of-contents',
        'position' => 'top',
        'style' => 'bullet',
        'min_heading_level' => 1,
        'max_heading_level' => 6,
        'normalize' => 'flat',
        'placeholder' => null,
    ],
];

class PostsController extends Controller
{
    //
    public function getSingle($Slug) {
        $posts = DB::table('posts')->where('Slug','=',$Slug)->get();
        global $converter;
        global $config;
        global $environment;
        $converter = new CommonMarkConverter([
            $config, $environment,
        ]);
        //dd($posts[0]->Content);
        try
        {
            $path = public_path().'\Blog_resources\post-content'.'/'.$posts[0]->Content;
            
            
            // $contents = fopen($path,'r');
            // $contents = fread($contents,filesize($path));
            $banners = DB::table('posts')->limit(6)->get();
            $tag = (!empty($_GET["tag"])) ? ($_GET["tag"]) : ('');
            $cats = DB::table('category')->get();

            $cmts = [];

            foreach($banners as $banner) {
                $count_cmt = DB::table('comment')->count();
                
                array_push($cmts,[$banner->id,$count_cmt]);
            }

            $tags = DB::table('tag')->get();
            $html =  $converter->convertToHtml(File::get($path));
            //echo ($html);
            return view('Post',['html' => $html,'banners' => $banners, 'cats' => $cats, 'cmts' => $cmts,'posts' => $posts,'tags' => $tags]);
        }
        catch ( FileNotFoundException $exception)
        {
            die("The file doesn't exist");
        }
    }
}
