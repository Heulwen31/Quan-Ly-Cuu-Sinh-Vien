<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Donate;
use Carbon\Carbon;

class DonateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('student.donate');
    }

    public function add(Request $request)
    {
        $money = $request->input('money') . 'đ';
        $message = $request->input('message');
        $date = Carbon::now();
        $data = array('id_author' => auth()->user()->id_student, 'username' => auth()->user()->name, 
            'money' => $money, 'message' => $message, 'time' => $date);
        DB::table('donates')->insert($data);

        return redirect('donate');
    }

    public function show()
    {
        $donates = DB::select('select * from donates');
        return view('admin.list_donate')->with('donates', $donates);
    }
}
