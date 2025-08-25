<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

class Studentcontroller extends Controller
{
    function add(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();

        if ($student) {
            echo "student added";
        } else {
            echo "operation failed";
        }
    }

    //get & display the data
    function list()
    {
        // $studentdata = student::all();
        $studentdata = student::paginate(2);
        // per page 5 records
        return view('list-student', ['student' => $studentdata]);
    }

    function delete($id)
    {
        $isDeleted = Student::destroy($id);

        if ($isDeleted) {
            return redirect('list-student')->with('success', 'Student deleted successfully!');
        } else {
            return redirect('list-student')->with('error', 'Student not found!');
        }
    }

    function edit($id)
    {
        $student = student::find($id);
        return view('edit', ['data' => $student]);
    }

    function editStudent(Request $request, $id)
    {
        $student = student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;


        if ($student->save()) {
            return redirect('list-student');
        } else {
            echo "update operation failed";
        }
    }

    function searchFun(Request $request){

        // $studentdata = student::where('name' , 'like' , "%$request->search%")->get();
        //pagination
         $studentdata = student::where('name' , 'like' , "%$request->search%")->paginate(2);
        return view('list-student' , ['student' => $studentdata , 'search' => $request->search]);
        // return $request->search;
    }

    function  deleteMultiple(Request $request){

        student::destroy($request->ids);

          if($request){
            return redirect('list-student');
          }
          else{
            echo "atudent data do not deleted";
          }
    }
}
