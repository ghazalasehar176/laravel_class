<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    function getStu(){

        /* $fun =  new \App\Models\student;
        echo $fun->testFun(); */

      $student = \App\Models\student::all();
          return view('student' , ['stud'=>$student]);
    }
}
