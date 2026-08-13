<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ClientTestimonial;
use App\Models\Hero;
use App\Models\MyService;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home() {
        $hero = Hero::latest()->first();
        $about = About::latest()->first();
        $portfolios = Portfolio::latest()->get();
        $services = MyService::latest()->get();
        $client = ClientTestimonial::latest()->get();
        return view('welcome', compact('portfolios', 'hero','services', 'client', 'about'));
    }
}
