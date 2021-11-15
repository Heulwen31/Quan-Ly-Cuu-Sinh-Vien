<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ForumController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * show content in forum
     * 
     */
    public function show()
    {
        $contents = DB::select('select * from forum');
        return view('forum/forum')->with('contents', $contents);
    }

    public function showStudent()
    {
        $contents = DB::select('select * from forum');
        return view('forum/forum_student')->with('contents', $contents);
    }
}
