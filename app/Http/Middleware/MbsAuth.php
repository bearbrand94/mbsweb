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

        $auth_data = session('auth_data');
        if(!isset($auth_data)){
            return redirect()->intended('login');
        }
        try {
            $res = $client->request('POST', config('app.mbs_api')."/detailAgen", [
                'timeout' => 30,
                'form_params' => [
                    'token'  => $auth_data->token,
                    'id' => md5($auth_data->kode_agen),
                ]
            ]);
            
            $body = json_decode($res->getBody());
            // print_r($body);
            if($body->Status == "false"){
                // return "false";
                return redirect()->intended('login')->withInput()->withErrors(['Login Server Error.']);
            }
        } catch (RequestException $e) {
            // return "error";
            return redirect()->intended('login')->withInput()->withErrors(['Login Server Error.']);
        }
        return $next($request);
    }
}
