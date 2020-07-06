<?php

namespace App\Http\Middleware;

use Closure;
use App\CountryVisits;
use Illuminate\Support\Facades\Session;

class VisitsMiddleware
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
        if (!session('visited')) {
            if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ipAddresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
                $ipAddresses =  trim(end($ipAddresses));
            } else {
                $ipAddresses = $_SERVER['REMOTE_ADDR'];
            }
            $country = geoip($ipAddresses)->country;
            $visit = CountryVisits::firstOrCreate([
                'country' => $country
            ]);
            $visit->incrementVisits();
            session(['visited' => 'visited']);
            Session::save();
        }
        return $next($request);
    }

}
