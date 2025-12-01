<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function index(){
        return view('admin.portfolio.index');
    }
    //
    public function create(){
        return view('admin.portfolio.create');
    }

}
