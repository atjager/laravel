<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;

class CompetitionController extends Controller
{
    public function index() {
        $comps = Competition::all();
        return view('comps')->with('comps', $comps);
    }
}
