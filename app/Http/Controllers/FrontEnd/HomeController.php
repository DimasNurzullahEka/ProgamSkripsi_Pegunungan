<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        return view("frontend.home");
    }
    public function booking(){
        return view("frontend.booking");
    }
}
