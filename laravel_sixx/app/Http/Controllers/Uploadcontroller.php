<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uploadcontroller extends Controller
{
    //file upload
    function upload(Request $request){
        // return "upload function call";

        // $path = $request->file('file')->store('public');
        $path = $request->file('file')->storeAs('public' , 'dummy1.png');
        $path = $request->file('file')->storeAs('public' , 'dummy2.pdf');
        $filenameArray = explode("/" , $path);
        $fileName = $filenameArray[1];
        return view('display' , ['path'=>$fileName]);
        // return $path;
    }
}


//cmd run in to upload the file is: php artisan storage:link