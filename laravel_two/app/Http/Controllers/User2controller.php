<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User2controller extends Controller
{
    function userTwo(Request $request){
        echo $request->city;
        echo "<br>";
        echo $request->gender;
        echo "<br>";
        echo $request->age;
        echo "<br>";
        print_r($request->skill);
    }
}
