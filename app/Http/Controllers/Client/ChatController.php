<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Events\Client\Chat;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('client/chat');
    }

    public function submit(Request $request)
    {
        $data = [
            'message' => $request->message,
        ];
        event(new Chat($data['message']));

        return response()->json(['message' => $data['message']], 200);
    }
}
