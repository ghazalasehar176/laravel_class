<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Mycontroller extends Controller
{
     function newfun(){

    /* $result= DB::table('my_tab')->where('name' , 'biya')->get(); */
    
  /*   $result= DB::table('my_tab')->first();
    $result= [$result]; */
    
     // return view('Myview' , ['user'=>$result]);




   /*  
   //HARD CODED data because data is manually fix
   //DATA INSERT
   
   $result= DB::table('my_tab')->insert([
        'name'=>'tony',
        'email'=>'tony@gmail.com',
        'phone'=>'1111',
     ]);

     if($result){
        return "data insertted";
     }
     else{
        return "data not found";
     } */



    /* //DATA UPDATE
     $result= DB::table('my_tab')->where('name' , 'tony')->update([
        'phone'=>'033387487953',
     ]);

      if($result){
        return "data updated";
     }
     else{
        return "data not updated";
     }  */
      

    /* //DATA DELETED
     $result= DB::table('my_tab')->where('name' , 'tony')->delete();

      if($result){
        return "data deleted";
     }
     else{
        return "data not deleted";
     }  */

    
     
    }
}
