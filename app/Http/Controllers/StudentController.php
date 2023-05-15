<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student', compact('students'));
    }

    public function create()
    {
        return view('create');
    }

    //store student
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'gender' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('student.index');
    }

    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'gender' => 'required',
        ]);

        $student->update($request->all());
        return redirect()->route('student.index');
    }


    //destroy
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');
    }


}
