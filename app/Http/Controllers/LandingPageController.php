<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        //get one hero that is active
        $hero = \App\Models\Hero::where('is_active', true)->first();
        //get all services
        $services = \App\Models\Service::all();
        return view('welcome', compact('hero', 'services'));
    }
}
