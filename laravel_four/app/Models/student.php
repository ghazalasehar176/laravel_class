<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
  
/* //if the table or model throw error or show message tablenot found 
    protected $table = "table_name"; */

    
    function testFun(){
        return "this is a dummy function";
    }
}
