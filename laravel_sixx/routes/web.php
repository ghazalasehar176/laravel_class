<?php

use App\Http\Controllers\Sessioncontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\FlashSessionController;
use App\Http\Controllers\Uploadcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/user' ,[Usercontroller::class , 'loginFun']);
Route::view('new' , 'User');


//session
Route::view('login' , 'login');
Route::view('profile' , 'profile');

Route::post('log' , [Sessioncontroller::class, 'login']);
Route::get('logout' , [Sessioncontroller::class, 'logoutFun']);

//Add user data
Route::post('add' , [FlashSessionController::class, 'addUser']);
Route::view('flash' , 'Flashsession');

//file upload
Route::view('upload' , 'Fileupload');
Route::post('upload' , [Uploadcontroller::class, 'upload']);