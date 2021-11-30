<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.contact');
    }

    public function add(Request $request)
    {
        $title = $request->input('title') . "!";
        $content = $request->input('content');
        $id = $request->input('id');
        $data = array('title' => $title, 'content' => $content, 'id_author' => $id);
        DB::table('contacts')->insert($data);

        return redirect("contact");
    }

    public function show()
    {
        $contents = DB::table('contacts')->where('id_author', '=', auth()->user()->id_student);
        $contents = $contents->get();
        return view('student.notification')->with('contents', $contents);
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);

        $contact->delete();
        return redirect('notification')->with('status', 'Xóa thành công');
    }
}
