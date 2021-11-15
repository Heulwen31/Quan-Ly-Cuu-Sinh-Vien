<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class InsertContentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('forum.newcontent');
    }

    public function indexStudent()
    {
        return view('forum.newcontent_student');
    }


    public function add(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $date = Carbon::now();
        $isData = User::where('id_student', auth()->user()->id_student)->first();

        if (!$isData) {
            $data = array('title' => $title, 'content' => $content, 'time' => $date, 'id_author' => auth()->user()->id_student);
            DB::table('forum')->insert($data);
        }

        return redirect()->action('App\Http\Controllers\ForumController@show');
    }

    public function addStudent(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $date = Carbon::now();
        $isData = User::where('id_student', auth()->user()->id_student)->first();

        if (!$isData) {
            $data = array('title' => $title, 'content' => $content, 'time' => $date, 'id_author' => auth()->user()->id_student);
            DB::table('forum')->insert($data);
        }

        return redirect()->action('App\Http\Controllers\ForumController@showStudent');
    }
}
