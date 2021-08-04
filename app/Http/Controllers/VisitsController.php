<?php

namespace App\Http\Controllers;

use App\CountryVisit;
use Illuminate\Http\Request;

class VisitsController extends Controller
{
    public function index()
    {
        $topCountries = CountryVisit::orderBy('visits', 'desc')->limit(10)
            ->select('country', 'visits')->get();

        $CountryVisit = CountryVisit::orderBy('visits', 'desc')->paginate(10);
        return view('admin.visits')->with([
            'CountryVisit' => $CountryVisit,
            'topCountries' => $topCountries,
        ]);
    }
}
