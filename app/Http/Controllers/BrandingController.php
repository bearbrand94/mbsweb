<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branding;

class BrandingController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $branding = Branding::all();
        return view('branding')->with('branding', $branding);
    }
}
