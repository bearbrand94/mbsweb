<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Cookie\CookieJarInterface;
use GuzzleHttp\Cookie\SessionCookieJar;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);

        $auth_data = session('auth_data');
        if(isset($auth_data)){
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
                    return redirect('/home');
                }
            } catch (RequestException $e) {
            }
        }

        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

        return $next($request);
    }
}
