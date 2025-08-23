<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    function query(){
        // $result = student::all();

        //  $result = student::all()->where('name' , 'mahruk');

       /* $result = student::all()->first();
        $result = [$result]; */

         /* $result = student::find(4);
        $result = [$result]; */



       /*  //DATA INSERTTED
         $result = student::insert([
            'name' => 'alisha',
            'email'=> 'alish@gmail.com',
            'phone'=>'03343434646',
         ]);

         if($result){
            return "data inserted";
         }
         else{
            return "data not inserted";
         } */


         /* //DATA UPDATED
         $result = student::where('name' , 'maham')->update([
            'phone' => '03151025810'
            
        ]);

         if($result){
            return "data updated";
         }
         else{
            return "data not updated";
         } */
        


            //DATA DELETED
         $result = student::where('name' , 'rajab')->delete();

         if($result){
            return "data deleted";
         }
         else{
            return "data not deleted";
         }
        
         
        //  return view('Student' , ['stud'=>$result]);    
    }
}
