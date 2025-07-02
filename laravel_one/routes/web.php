<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Usercontroller;
use App\Http\Controllers\User2controller;
use App\Http\Controllers\home;
 


Route::get('/', function () {
    return view('welcome');
});

Route::view("/user" , "user-form");
Route::post("/add" , [Usercontroller::class ,'addUser']);
 

Route::view("/user2" , "user-form-two");
Route::post("/usertwo" , [User2controller::class , 'userTwo']);

Route::view("/home" , "home");
Route::view("/about" , "about");

Route::view("/hellomy" ,"named")->name("hm");
Route::get('/show',[home::class , 'show']);