<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uploadcontroller extends Controller
{
    //file upload
    function upFun(Request $request){
        // return "upload function call";

        $path = $request->file('file')->store('public');
        $filenameArray = explode("/" , $path);
        $fileName = $filenameArray[1];
        return view('display' , ['data'=>$fileName]);
    }
}
