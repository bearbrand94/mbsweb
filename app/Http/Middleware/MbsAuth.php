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
        try {
            $res = $client->request('POST', config('app.mbs_api')."/detailAgen", [
                'timeout' => 30,
                'form_params' => [
                    'token'  => $auth_data->token,
                    'id' => $auth_data->kode_agen,
                ]
            ]);
            // return $res;
            $body = json_decode($res->getBody());
            if($body->Status == "true"){
            }
            else{
                return redirect()->intended('login');
            }
        } catch (RequestException $e) {
            // return redirect()->intended('login');
        }
        return $next($request);
    }
}
