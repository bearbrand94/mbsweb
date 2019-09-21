<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Lead;

class LeadsController extends Controller
{
    private $menu;
    public function __construct()
    {
        $menu = Category::where('type', 0)->where('parent_id',null)->get();
        for ($i=0; $i < count($menu); $i++) { 
            $menu[$i]->submenu = Category::where('parent_id', $menu[$i]->id)->get();
        }
        $this->menu = $menu;
    }

    public function index()
    {
        return view('leadsgen-menu')->with('menu', $this->menu);
    }

    public function article($slug){
        $header = Category::where('slug', $slug)->first();
        $leads = Category::where('categories.slug',$slug)->join('leads', 'leads.category_id', '=', 'categories.id')->select('leads.*', 'categories.name as category_name')->get();
    	return view('leadsgen')->with('menu', $this->menu)->with('header', $header)->with('leads', $leads);
    }

    public function article_detail($slug){
        $lead = Lead::where('slug', $slug)->first();
        $category = Category::find($lead->category_id);
        return view('article')->with('lead', $lead)->with('category', $category);
    }
}
