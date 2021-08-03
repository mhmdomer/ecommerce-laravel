<?php

namespace App\Http\Controllers;

use App\CountryVisits;
use Illuminate\Http\Request;

class VisitsController extends Controller
{
    public function index()
    {
        $topCountries = CountryVisits::orderBy('visits', 'desc')->limit(10)
            ->select('country', 'visits')->get();

        $countryVisits = CountryVisits::orderBy('visits', 'desc')->paginate(10);
        return view('admin.visits')->with([
            'countryVisits' => $countryVisits,
            'topCountries' => $topCountries,
        ]);
    }
}
