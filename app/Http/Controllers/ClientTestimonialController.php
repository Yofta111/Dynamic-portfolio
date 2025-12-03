<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientTestimonialController extends Controller
{
    //
    public function index(){
        return view('admin.clientTestimonial.index');
    }
    //
    public function create(){
        return view('admin.clientTestimonial.create');
    }
}
