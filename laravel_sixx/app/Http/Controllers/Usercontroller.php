<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{

    //laravel HTTP reqest class
    function loginFun(Request $request ){
        echo "request method is: ",$request->method(); // check which method call
        echo "<br>";
        echo "request path is : ",$request->path(); // check method has which path
        echo "<br>";
        echo "request url is : ",$request->url(); // check method has which url
        echo "<br>";
        echo "name is : ",$request->input('username'); // check method has which url
        echo "<br>";
        echo "name is : ",$request->username; // check method has which url
        echo "<br>";
        print_r($request->input());
        echo "<br>";
        print_r($request->collect());
        echo "<br>";
        echo "request ip is : ",$request->ip(); // check method has which url
        echo "<br>";

        if($request->isMethod('post')){
           echo "execute for post method";
        }
        else{
            echo "execute for other method";
        }
        echo "<br>";

         if($request->is('user')){
           echo "execute for user path";
        }
        else{
            echo "execute for other path";
        }
    }
}
