<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ClientTestimonial;
use App\Models\MyService;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home() {
        $abouts = About::latest()->get();
        $portfolios = Portfolio::latest()->limit(3)->get();
        $services = MyService::latest()->get();
        $client = ClientTestimonial::latest()->get();
        return view('welcome', compact('portfolios', 'services', 'client', 'abouts'));
    }
}
