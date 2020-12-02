<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    
    public function index()
    {
        $fb = Feedback::all();

        return view('admin/admin_feedback',['fb' => $fb]);
    }

    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
        $fb = Feedback::find($id);
        $fb->delete();
        
        return redirect('/pengurus/feedback')->with('status', 'Data berhasil Dihapus!');
    }
}
