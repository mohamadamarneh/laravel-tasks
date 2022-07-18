<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\claas;
use App\Models\student;
class StudentController extends Controller
{
     public function create(Request $request)
    {
        $student = new Student;
        $student->fname = 'Qutaibah';
        $student->lname = 'khasawneh';
         $student->save();
     
        $student->fname = 'Haya';
        $student->lname = 'Abdallah';
         $student->save();

        $claas = claas::find([1, 2]);
        $student->claas()->attach($claas);

        return 'Success';
    }


    public function show(Student $student)
{
   
   return view('students.show', compact('student'));
}
}
