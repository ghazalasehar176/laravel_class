<?php

use Illuminate\Support\Facades\Route;
 


Route::get('/', function () {
    return view('welcome');
});
 
Route::Middleware('agroup')->group(function (){
    Route::view('/first' , 'first')->middleware('agroup');
    Route::view('/second' , 'second')->middleware('agroup');
});