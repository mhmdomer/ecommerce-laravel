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
        // session()->put('visited', true);
        // dd(session('visited'));
        if(!session('visited')) {
            $country = geoip($request->ip())->country;
            $visit = CountryVisits::firstOrCreate([
                'country' => $country
            ]);
            $visit->incrementVisits();
            session(['visited' => 'visited']);
            // dd(session('visited'));
            Session::save();
            // dd(Session::get('visited'));
        }
        return $next($request);
    }
}
