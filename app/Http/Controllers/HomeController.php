<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Experience;


class HomeController extends Controller
{
    //
    public function index() {
        $educations = Education::all();
        $experiences = Experience::all();

        return view('home', compact('educations', 'experiences'));
    }
}
