<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\Routecontroller;

Route::get('/', function () {
    return view('welcome');
});


Route::get('mynew' , [Mycontroller::class , 'newfun']);
 
Route::get('student' , [Studentcontroller::class, 'query']);


//laravel method
Route::get('Route' , [Routecontroller::class , 'getMeth']);

Route::post('route', [Routecontroller::class , 'postMe']);

// PUT request handle karta hai (existing data update karne k liye use hota hai)
Route::put('route', [Routecontroller::class , 'putMe']);

// DELETE request handle karta hai (data delete karne k liye use hota hai)
Route::delete('route', [Routecontroller::class , 'deleteMe']);

//Any() function 
Route::any('Route' , [Routecontroller::class , 'anyMe']);

//match method
Route::match(['post' , 'get'],'route' , [Routecontroller::class , 'group1']);
Route::match(['put' , 'delete'],'route' , [Routecontroller::class , 'group2']);


Route::view('for' , 'Route');


