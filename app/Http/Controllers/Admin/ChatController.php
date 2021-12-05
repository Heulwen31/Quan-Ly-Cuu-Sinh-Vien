<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Events\Admin\Chat;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checklogin');
    }

    public function index() {
        return view('admin/chat');
    }

    public function submit(Request $request)
    {
        $data = [
            'message' => $request->message,
            'test' => $request->test,
            'path' => auth()->user()->path,
        ];
        event(new Chat($data['message'], $data['test'], $data['path']));

        return response()->json(['message' => $data['message'], 'test' => $data['test'], 'path' => $data['path']], 200);
    }
}
