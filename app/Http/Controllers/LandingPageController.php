<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Models\Service;
use App\Models\Services;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        //get one hero that is active
        $hero = \App\Models\Hero::where('is_active', true)->first();
        //get all services by order sort column
        $services = Service::orderBy('sort')->get();
        $portofolios = Portofolio::with('category')->inRandomOrder()->limit(10)->get();

        return view('welcome', compact('hero', 'services', 'portofolios'));
    }
}
