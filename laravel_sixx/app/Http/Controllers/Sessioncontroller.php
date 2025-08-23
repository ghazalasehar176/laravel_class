<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sessioncontroller extends Controller
{
    function login(Request $request){
        $request->session()->put('username',  $request->input('username'));
       
        

        //  return  $request->input('username');

        return redirect('profile');
    }

    function logoutfun(){
        session()->pull('username');
        return redirect('profile');
    } 
}
