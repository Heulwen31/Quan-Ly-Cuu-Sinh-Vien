<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checklogin');
    }

    public function statistic()
    {
        $below_average = DB::table('study__details')->where('cpa', '>=', 1)->where('cpa', '<', 2.5)->count('student_id');
        $average = DB::table('study__details')->where('cpa', '>=', 2.5)->where('cpa', '<', 3.2)->count('student_id');
        $good =  DB::table('study__details')->where('cpa', '>=', 3.2)->where('cpa', '<', 3.6)->count('student_id');
        $excellent =  DB::table('study__details')->where('cpa', '>=', 3.6)->where('cpa', '<', 4)->count('student_id');
        return view('admin/home_admin', ['below_average' => $below_average, 'average' => $average, 'good' => $good, 'excellent' => $excellent]);
    }
    public function statistic2()
    {
        // du lieu bieu do thong ke sinh vien theo so luong va ket qua hoc tap
        $below_average = DB::table('study__details')->where('cpa', '>=', 1)->where('cpa', '<', 2.5)->count('student_id');
        $average = DB::table('study__details')->where('cpa', '>=', 2.5)->where('cpa', '<', 3.2)->count('student_id');
        $good =  DB::table('study__details')->where('cpa', '>=', 3.2)->where('cpa', '<', 3.6)->count('student_id');
        $excellent =  DB::table('study__details')->where('cpa', '>=', 3.6)->where('cpa', '<', 4)->count('student_id');


        // du lieu bieu do that nghiep
        $that_nghiep = DB::table('students')->where('job', '=', '')->count('id');
        $dang_lam_viec = DB::table('students')->where('job', '<>', '')->count('id');

        // thong ke sinh vien theo tinh thanh pho 
        $hanam = DB::table('students')->where('address', '=', 'ha nam')->count('id');
        $hanoi = DB::table('students')->where('address', '=', 'ha noi')->count('id');
        return view('statistic', [
            'below_average' => $below_average,
            'average' => $average,
            'good' => $good,
            'excellent' => $excellent,
            'that_nghiep' => $that_nghiep,
            'dang_lam_viec' => $dang_lam_viec,
            'hanam' => $hanam,
            'hanoi' => $hanoi,
        ]);
    }
}
