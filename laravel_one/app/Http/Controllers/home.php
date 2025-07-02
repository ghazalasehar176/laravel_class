<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    function show(){
        // return view("home");
        return to_route('hm');
    }
}
