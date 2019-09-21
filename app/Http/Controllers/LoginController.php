<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	function log_out(Request $request){
		Auth::logout();
		// $jar = session('jar');
		// $client = new Client(['cookies' => $jar]);
  //       $res = $client->request('POST', config('app.api_url')."/logout");
		// session()->flush();
		return redirect()->intended('login');
	}
}
