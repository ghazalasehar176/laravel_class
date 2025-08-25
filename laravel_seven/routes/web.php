<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Studentcontroller;

Route::middleware('Setlang')->group(function () {
  Route::get('welcome', function () {
    return view('welcome');
  });


  /* //if we want to change language with Route.
Route::get('about/{lang}' , function ($lang){
App::setLocale($lang);
         return view('about');
});
 */


  Route::view('about', 'about');


  //choose your language Route
  Route::get("setLang/{lang}", function ($lang) {
    Session::put('lang', $lang);
    return redirect('/');
  });
});

//create
Route::view('add', 'Createstudent');
Route::post('add', [Studentcontroller::class, 'add']);
//list student
Route::get('list-student', [Studentcontroller::class, 'list']);
//delete
Route::get('delete/{id}', [Studentcontroller::class, 'delete']);
//edit
Route::get('edit/{id}', [Studentcontroller::class, 'edit']);
Route::put('edit-student/{id}', [Studentcontroller::class, 'editStudent']);
//search
Route::get('search' , [Studentcontroller::class , 'searchFun']);
//delete mutiple records
Route::post('delete-multi' , [Studentcontroller::class , 'deleteMultiple']);