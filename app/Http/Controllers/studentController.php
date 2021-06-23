<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Student as GlobalStudent;

class studentController extends Controller
{
    function show()
    {
        $student= student::all();
        return view('welcome',compact('student'));
    }

    function addData(Request $request)
    {
        $student= new student();
        $student->first_name=$request->firstName;
        $student->last_name=$request->lastName;
        $student->age=$request->age;
        $student->blood_group=$request->blood;
        $student->address=$request->address;
        $student->number=$request->number;
        $student->email=$request->email;
        $student->mother_name=$request->m_name;
        $student->father_name=$request->f_name;
        $student->save();
        return redirect('/');
    }

    function editData($id)
    {
        $student=student::find($id);
        return view('edit_data',compact('student'));
        $a=10;
    }

    function updateData(Request $request,$id)
    {
        $student=student::find($id);
        $student->first_name=$request->firstName;
        $student->last_name=$request->lastName;
        $student->age=$request->age;
        $student->blood_group=$request->blood;
        $student->address=$request->address;
        $student->number=$request->number;
        $student->email=$request->email;
        $student->mother_name=$request->m_name;
        $student->father_name=$request->f_name;
        $student->save();
        return redirect('/');

    }

    function deleteData($id)
    {
        $student=student::find($id);
        $student->delete();
        return redirect('/');
    }
}
