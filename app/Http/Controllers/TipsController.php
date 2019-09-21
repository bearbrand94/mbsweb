<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tips;
use App\Category;

class TipsController extends Controller
{

	private $menu;

    public function __construct()
    {
        $this->menu = Category::where('type','1')->get();
    }

    public function index()
    {
        return view('tips-menu')->with('menu', $this->menu);
    }
    public function article($slug)
    {
    	$tips = Category::where('slug',$slug)->join('tips', 'tips.category_id', '=', 'categories.id')->get();
        return view('tips-article')->with('menu', $this->menu)->with('tips', $tips);
    }
}
