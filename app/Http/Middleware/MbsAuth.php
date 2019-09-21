<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Cookie\CookieJarInterface;
use GuzzleHttp\Cookie\SessionCookieJar;

class MbsAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);
        try {
            $res = $client->request('POST', config('app.mbs_api')."/login", [
                'auth'    => [session('auth_username'), md5(session('auth_password'))],
                'timeout' => 30,
                'form_params' => [
                    'nama'  => "mbs_website",
                    'model' => "website",
                    'imei'  => "14056"
                ]
            ]);
            // return $res;
            $body = json_decode($res->getBody());
            if($body->Status == "true"){ // 200 = Success
                $user_info = $body->Message->Data; // { "type": "User", ..
                session(['auth_data'=>$user_info]);
                // return redirect()->intended('home');
                // print_r($user_info);
            }
            else{
                // return "Login Invalid";
                return redirect()->intended('login');
            }
        } catch (RequestException $e) {
            // return redirect()->intended('login');
        }
        return $next($request);
    }
}
