<?php

namespace App\Http\Controllers;
use\App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function allStudents()
    {
    $students = Student::all();
    $data['title'] = 'Student List';
    return view('students', compact('students'), $data);

    }

    public function index(){
        $data['title']= 'This is my homepage for Quiz 2';
        return view('main', $data);
    }

    public function show(Student $student){
        $data['student'] = $student;
        $data['title'] = "Detail View";
        return view('/students/student', $data);
    }
}
