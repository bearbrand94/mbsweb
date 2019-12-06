<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use App\Category;

class RecruitingController extends Controller
{
    private $menu;
    public function __construct()
    {
        $menu = Category::where('type', 'RECRUITS')->where('parent_id',null)->get();
        for ($i=0; $i < count($menu); $i++) { 
            $menu[$i]->submenu = Category::where('parent_id', $menu[$i]->id)->get();
        }
        $this->menu = $menu;
    }

    public function index()
    {
        return view('recruiting.menu')->with('menu', $this->menu);
    }

    public function shared_article($slug, $token){
        $lead = Lead::where('slug', $slug)->first();
        $category = Category::find($lead->category_id);
        return view('shared-article')->with('lead', $lead)->with('category', $category);
    }

    public function article($slug){
        $header = Category::where('slug', $slug)->first();
        $posts = Category::where('cms_categories.slug',$slug)->join('cms_posts as posts', 'posts.category_id', '=', 'cms_categories.id')->select('posts.*', 'cms_categories.name as category_name')->paginate(3);
    	return view('recruiting.list')->with('menu', $this->menu)->with('header', $header)->with('posts', $posts);
    }

    public function article_detail($slug){
        $post = Lead::where('slug', $slug)->first();
        $category = Category::find($post->category_id);
        return view('recruiting.article')->with('post', $post)->with('category', $category);
    }
}
