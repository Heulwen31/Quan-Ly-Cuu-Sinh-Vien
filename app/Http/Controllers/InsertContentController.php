<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertContentController extends Controller
{
    //
    public function index()
    {
        return view('forum.newcontent');
    }


    public function add(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $date = Carbon::now();
        $data = array('title' => $title, 'content' => $content, 'time' => $date, 'id_author' => auth()->user()->id_student);
        DB::table('forum')->insert($data);

        return redirect()->action('App\Http\Controllers\ForumController@show');
    }
}
