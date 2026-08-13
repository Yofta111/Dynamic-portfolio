<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Hero;
use App\Models\MyService;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home() {
        $hero = Hero::latest()->first();
        $about = About::latest()->first();
        $portfolios = Portfolio::latest()->get();
        $services = MyService::latest()->get();
        $skills = Skill::latest()->get();
        return view('welcome', compact('portfolios', 'hero','services', 'skills', 'about'));
    }
}
