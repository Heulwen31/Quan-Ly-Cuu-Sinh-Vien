<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class InsertFeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('student.feedback');
    }

    public function add(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $date = Carbon::now();
        $data = array('title' => $title, 'content' => $content, 'time' => $date, 
                'id_author' => auth()->user()->id_student, 'username' => auth()->user()->name, 'userpath' => auth()->user()->path);
        DB::table('feedback')->insert($data);

        return redirect("feedback");
    }
}
