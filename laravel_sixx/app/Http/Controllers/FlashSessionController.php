<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashSessionController extends Controller
{
    function addUser(Request $request){
        $request->session()->flash("message" , "user has been added succesfully");
        //  $request->session()->flash("username" , "anil");
        return redirect('flash');
    }
}
