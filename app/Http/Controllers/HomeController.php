<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home0119");
    }
    public function artikel(){
        return view("artikel0119");
    }
    public function contact(){
        return view("contactus0119");
    }
}