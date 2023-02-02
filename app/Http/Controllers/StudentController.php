<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function home() {
        return view('students.form');
    }

    public function InsertData(Request $go)
    {
              
        $kaka = new Student();

        $kaka->FirstName=$go->name; //izi za mwsh ni ktk form
        $kaka->LastName=$go->name;
        $kaka->Boat_Type=$go->name;
        $kaka->Address=$go->name;
        $kaka->Email=$go->name;
        $kaka->Phone=$go->name;
        $kaka -> save();

        return redirect('/')->with('status', 'Form successful');

       
    }

    public function reuslt(){
        $vstudent = Student::all();
        return view('students.result');
    }
}
