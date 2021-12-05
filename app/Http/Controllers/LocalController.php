<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocalController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contents = DB::select('SELECT * FROM `group`');
        return view('local_work')->with('contents', $contents);
    }

    public function insert(Request $request)
    {
        $tieude = $request->input('tieude');
        $noidung = $request->input('noidung');
        $diadiem = $request->input('diadiem');
        $link = $request->input('link');
        $data = array('tieude' => $tieude, 'noidung' => $noidung, 'diadiem' => $diadiem, 'link' => $link);
        DB::table('group')->insert($data);
        return back();
    }

    public function delete($id)
    {
        DB::delete('delete from `group` where id = ?', [$id]);
        return back();
    }

    public function indexStudent()
    {
        $contents = DB::select('SELECT * FROM `group`');
        return view('local_student')->with('contents', $contents);
    }
}
