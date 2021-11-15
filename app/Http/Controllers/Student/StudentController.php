<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Study_Detail;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $temp = auth()->user()->id_student;
        $student = DB::table('students')->where('id', '=', $temp);
        $student = $student->get();

        $pageName = 'Page Name - Info';

        return view('/student/student', compact('student', 'pageName'));
        
    }

    public function show($id)
    {
        $student = Student::find($id);
        $study_detail = Student::find($id)->study;
        return view('/student/student_detail', compact('student', 'study_detail'));
    }
}
