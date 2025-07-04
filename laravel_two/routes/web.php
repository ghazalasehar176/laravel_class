<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Usercontroller;
use App\Http\Controllers\User2controller;
use App\Http\Controllers\home;
use App\Http\Controllers\my;
 


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

//Route grouping with prefix
// Isko hum Route Group with Prefix kehte hain.Short mein: Ye code student/ prefix ke sath sab routes ko group karta hai. Jaise: student/my, student/show, student/add.
Route::prefix('student')->group(function (){
      Route::view('/my' , 'my');
      Route::get('/show' , [my::class , 'show']);
      Route::get('/add' , [my::class , 'add']);
});

////Route grouping with controller
Route::controller(my::class)->group(function (){
    Route::get('student/list' , 'list');
    Route::get('student/delete' , 'delete');
    Route::get('student/update' , 'update');
    Route::get('/my/{name}' , 'data');
});

