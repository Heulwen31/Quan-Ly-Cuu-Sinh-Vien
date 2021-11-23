<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Forum;

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

    public function content($id)
    {
        $contents = Forum::find($id);
        return view('forum/content', compact('contents'));
    }

    public function contentStudent($id)
    {
        $contents = Forum::find($id);
        return view('forum/content_student', compact('contents'));
    }
}
