<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Student;

class StudentController extends Controller
{   

    function getStudents(){
        // $students = \App\Models\Student::all();
        $students = new Student;
        $students = $students->all();

        return view('students',['students'=>$students]);
    }

    function addStudent(Request $request){
        // $students = \App\Models\Student::all();
        $students = new Student;
        $students->name = $request->name;
        $students->city = $request->city;
        $students->batch = $request->batch;
        $students->save();
        return redirect('/');
    }

    function deleteStudent($id){
        $students = new Student;
        $students->destroy($id);
        return redirect('/');
    }

    function editStudent($id){
        $students = new Student;
        $data = $students->find($id);
        return view('editStudent',["data" => $data ]);
    }
    function updateStudent(Request $request,$id){
        $students = new Student;
        $students = $students->find($id);
        $students->name = $request->name;
        $students->city = $request->city;
        $students->batch = $request->batch;
        $students->save();
        return redirect('/');
    }
}
