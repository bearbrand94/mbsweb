<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Cookie\CookieJarInterface;
use GuzzleHttp\Cookie\SessionCookieJar;

class LoginController extends Controller
{
	function log_in(Request $request){
		$jar = session('jar');
    	$client = new Client(['cookies' => $jar]);
    	try {
	        $res = $client->request('POST', config('app.mbs_api')."/login", [
	        	'auth'	  => [$request->username, md5($request->password)],
	        	'timeout' => 30,
			    'form_params' => [
			    	'nama'  => "mbs_website",
			    	'model' => "website",
			    	'imei'  => "14056"
			    ]
			]);
			$body = json_decode($res->getBody());
			if($body->Status == "true"){ // 200 = Success
				// Auth::login($request->username, TRUE);
				$user_info = $body->Message->Data; // { "type": "User", ..
				session(['auth_data'=>$user_info]);
				print_r($user_info);
				return redirect()->intended('home');
				// print_r($user_info);
			}
			else{
				// print_r($body);
	        	return redirect()->back()
           			->withInput()->withErrors(['Login Invalid']);
			}
		} catch (RequestException $e) {
			return "Login Invalid";
		}
	}

	function log_out(Request $request){
		Auth::logout();
		// $jar = session('jar');
		// $client = new Client(['cookies' => $jar]);
  //       $res = $client->request('POST', config('app.api_url')."/logout");
		session()->flush();
		return redirect()->to('login');
	}
}
