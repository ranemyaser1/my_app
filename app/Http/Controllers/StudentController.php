<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
   public function admin()
    {
        return view('admin');
    }
    public  function student()
    {
        $students = Student::all();
        return view('student', ['students' => $students ]);
    }
    public  function create()
    {
        return view('create');
    }
     public  function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'level'=>'required',
            'age'=>'required|numeric',
        ]);
        $newStudent = Student::create($data);

        return redirect(route('student'));
    }
      public  function edit(Student $student)
    {
        return view('edit' , ['student' => $student ]);
    }
       public  function update(Student $student , Request $request)
    {
            $data = $request->validate([
            'name'=>'required',
            'level'=>'required',
            'age'=>'required|numeric',
        ]);

        $student->update($data);
        return redirect(route('student'))->with ('Update sucessfully');
    }

       public  function destroy(Student $student )
    {
        $student->delete();
        return redirect(route('student'))->with ('deleted sucessfully');
    }
}
