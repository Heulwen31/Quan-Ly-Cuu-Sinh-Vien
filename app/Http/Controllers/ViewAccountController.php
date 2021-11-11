<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewAccountController extends Controller
{
    public function show()
    {
        return view('account');
    }
}
