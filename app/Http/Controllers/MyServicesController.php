<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class MyServicesController extends Controller
{
    //
    public function index(){

        return view('admin.myServices.index');
    }
    //
    public function create(){
        return view('admin.myServices.create');
    }
}
