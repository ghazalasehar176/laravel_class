<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class my extends Controller
{
    function show(){
        return "student show";
    }
    function add(){
        return "add student";
    }

    function list(){
        return "<h2>list of student</h2>";
    }

     function delete(){
        return "<h2>delete student</h2>";
    }

     function update(){
        return "<h2>update student</h2>";
    }

    function data($name){
        return $name;
    }

}
