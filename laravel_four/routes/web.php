<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\Userrcontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/home' , 'home');

Route::get('users' , [Mycontroller::class , ('user')]);


Route::get('stu' , [Studentcontroller::class, 'getStu']);


Route::get('user' , [Userrcontroller::class , 'getUser']);