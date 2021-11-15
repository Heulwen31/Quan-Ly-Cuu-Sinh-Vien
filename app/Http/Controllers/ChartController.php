<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    //
    public function statistic()
    {
        $below_average = DB::table('study__details')->where('cpa', '>=', 1)->where('cpa', '<', 2.5)->count('student_id');
        $average = DB::table('study__details')->where('cpa', '>=', 2.5)->where('cpa', '<', 3.2)->count('student_id');
        $good =  DB::table('study__details')->where('cpa', '>=', 3.2)->where('cpa', '<', 3.6)->count('student_id');
        $excellent =  DB::table('study__details')->where('cpa', '>=', 3.6)->where('cpa', '<', 4)->count('student_id');
        return view('admin/home_admin', ['below_average' => $below_average, 'average' => $average, 'good' => $good, 'excellent' => $excellent]);
    }
}
