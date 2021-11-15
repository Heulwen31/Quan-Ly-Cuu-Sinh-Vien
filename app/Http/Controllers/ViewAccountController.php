<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ViewAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('account');
    }

    public function showStudent()
    {
        return view('acc_student');
    }

    public function save(Request $request, $id)
    {
        $user = User::find($id);

        $message = [
            'required' => "Bạn chưa chọn ảnh.",
            'image' => "File chọn phải là ảnh.",
            'mimes' => "Ảnh phải thuộc định dạng jpg,png,jepg,gif,svg,",
            'max' => "Kích thước không được vượt quá 2048.",
        ];

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ], $message);
    
        $title = $request->file('image')->getClientOriginalName();

        $path = $request->file('image')->store('public/images');

        $user->title = $title;
        $user->path = $path;
    
        $user->save();

        return redirect('account')->with('status', 'Tải ảnh thành công');
    }

    public function saveStudent(Request $request, $id)
    {
        $user = User::find($id);

        $message = [
            'required' => "Bạn chưa chọn ảnh.",
            'image' => "File chọn phải là ảnh.",
            'mimes' => "Ảnh phải thuộc định dạng jpg,png,jepg,gif,svg,",
            'max' => "Kích thước không được vượt quá 2048.",
        ];

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ], $message);
    
        $title = $request->file('image')->getClientOriginalName();

        $path = $request->file('image')->store('public/images');

        $user->title = $title;
        $user->path = $path;
    
        $user->save();

        return redirect('accountstudent')->with('status', 'Tải ảnh thành công');
    }
}
