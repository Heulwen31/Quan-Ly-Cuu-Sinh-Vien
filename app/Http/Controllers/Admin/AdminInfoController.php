<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Study_Detail;
use Illuminate\Support\Facades\DB;

class AdminInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = DB::table('students')->select('*');
        $student = $student->get();

        $pageName = 'Page Name - Info';

        return view('/admin/info', compact('student', 'pageName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/info_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => "Ô không được để trống.",
            'numeric' => "Giá trị nhập phải là số.",
            'gpa.max' => "Giá trị nhập không được vượt quá 4.",
            'cpa.max' => "Giá trị nhập không được vượt quá 4.",
            'point_training.max' => "Giá trị nhập không được vượt quá 100.",
            'min' => "Giá trị nhập không được nhỏ hơn 0.",
            'date_format' => "Vui lòng nhập đúng định dạng yyyy/mm/dd.",
        ];

        $this->validate($request, [
            'id'=>'required|numeric',
            'cccd'=>'required|numeric',
            'name'=>'required',
            'sex'=>'required',
            'birth'=>'required|date_format:Y/m/d',
            'email'=>'required',
            'phone'=>'required|numeric',
            'address'=>'required',
            'job'=>'required',
            'consultant'=>'required',
            'gpa'=>'required|numeric|max:4|min:0',
            'cpa'=>'required|numeric|max:4|min:0',
            'point_training'=>'required|numeric|max:100|min:0',
            'course'=>'required'
        ], $message);

        $student = new Student;
        $student->id = $request->id;
        $student->cccd = $request->cccd;
        $student->name = $request->name;
        $student->sex = $request->sex;
        $student->birth = $request->birth;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->job = $request->job;

        $student->save();

        $study_detail = new Study_Detail;
        $study_detail->student_id = $request->id;
        $study_detail->consultant = $request->consultant;
        $study_detail->gpa = $request->gpa;
        $study_detail->cpa = $request->cpa;
        $study_detail->point_training = $request->point_training;
        $study_detail->course = $request->course;

        $study_detail->save();
        return redirect()->action('App\Http\Controllers\Admin\AdminInfoController@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $study_detail = Student::find($id)->study;
        return view('/admin/info_detail', compact('student', 'study_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $study_detail = Student::find($id)->study;
        return view('/admin/info_update', compact('student', 'study_detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $study_detail = Student::find($id)->study;

        $student->id = $request->id;
        $student->cccd = $request->cccd;
        $student->name = $request->name;
        $student->sex = $request->sex;
        $student->birth = $request->birth;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->job = $request->job;
        $student->save();

        $study_detail->consultant = $request->consultant;
        $study_detail->gpa = $request->gpa;
        $study_detail->cpa = $request->cpa;
        $study_detail->point_training = $request->point_training;
        $study_detail->course = $request->course;
        $study_detail->save();

        return redirect()->action('App\Http\Controllers\Admin\AdminInfoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);

        $student->delete();
        return redirect()->action('App\Http\Controllers\Admin\AdminInfoController@index');
    }
}
