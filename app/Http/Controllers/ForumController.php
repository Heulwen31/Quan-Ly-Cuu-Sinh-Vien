<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ForumController extends Controller
{
    /**
     * show content in forum
     * 
     */
    public function show()
    {
        $contents = DB::select('select * from forum');
        return view('forum/forum')->with('contents', $contents);
    }
}
