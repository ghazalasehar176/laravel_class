<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class Userrcontroller extends Controller
{
    function getUser(){
      // https://jsonplaceholder.typicode.com/users just random api link not its own link its link gives by chatgpt 
        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        $response =  $response->body(); //$response->status(); //show all status
        return view('user' , ['data'=>json_decode($response)]);
    }
}
