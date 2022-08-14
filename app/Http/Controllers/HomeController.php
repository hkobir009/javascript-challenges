<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function primeNumber(){
        return view('frontend.primeNumber');
    }
}
