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

    public function download(Request $request){
        $branding = Branding::findOrFail($request->id);
        $filename = $branding->title.".".$branding->mime;
        $tempImage = tempnam(sys_get_temp_dir(), $filename);
        copy($branding->media_url, $tempImage);
        return response()->download($tempImage, $filename);
    }
}
