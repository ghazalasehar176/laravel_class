<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Routecontroller extends Controller
{
   function getMeth(){
       return "Get Method";
   }

    function postMe(){
       return "post Method";
   }

    function putMe(){
       return "put Method";
   }

   function deleteMe(){
    return "delete method";
   }

    function anyMe(){
    return "any method";
   }

    function group1(){
    return "this is group 1 method";
   }
    function group2(){
    return "this is group 2 method";
   }
}
