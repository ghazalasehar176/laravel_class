<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    function addUser(Request $request){
       echo "user name is: $request->username";
       echo "<br>";
       echo "user email is: $request->email";
        echo "<br>";
       echo "user city is: $request->city";
        echo "<br>";
    

        $request->validate([
           'username'=>'required | min:3 | max:10',
           'email'=>'required | email',
           //| email phir corrected email value b mang gy ga 
           'city'=>'required | max:20',
           'city'=>'uppercase'
        ] 
        // make custom message 
        , 
        [
            'username.required'=>'username field can not be empty',
            'username.min'=>'username have to be atleast 3 character',
            'username.max'=>'max character limit is 15 for username',
            'email.email'=>'not a valid email',
            'city.uppercase'=>'city should be uppercase'
        ]);
    }

}