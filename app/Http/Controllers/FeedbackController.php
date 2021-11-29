<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checklogin');
    }
    
    public function show()
    {
        $contents = DB::select('select * from feedback');
        return view('admin.receive_feedback')->with('contents', $contents);
    }

    public function destroy($id)
    {
        $feedback = Feedback::find($id);

        $feedback->delete();
        return redirect('receive-fb');
    }
}
