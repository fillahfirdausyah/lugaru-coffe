<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\Event;

class EventController extends Controller
{

    public function index()
    {
        $eventCount = Event::count();
        $event = Event::orderBy('id', 'desc')->get();

        return view('admin/admin_event', compact('eventCount', 'event'));
    }

    public function create()
    {
        return redirect('.pengurus.inputevent'); 
    }

    public function store(Request $request)
    {
        $input_data = $request->all();

        $validator = Validator::make($input_data, [
            'title' => 'required|max:255',
            'content' => 'required',
            'date' => 'required',
            'clock' => 'required',
            'image' =>   'required|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return redirect('/pengurus/inputevent')
                        ->withErrors($validator)
                        ->withInput();
        }

        $destinationPath = 'image'; 
        $profileImage ="image_event".time().".".$request->image->getClientOriginalExtension();
        $request->image->move($destinationPath, $profileImage);
        $img_name = $profileImage;

        $event = new Event();
        $event->title = $request->title;
        $event->content = $request->content;
        $event->date = $request->date;
        $event->clock = $request->clock;
        $event->image = $img_name;
        $event->save();

        return redirect()->back()->with('status', 'Data berhasil diunggah');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $event = Event::find($id);

        return view('admin/admin_editevent', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $input_data = $request->all();

        $validator = Validator::make($input_data, [
            'title' => 'required|max:255',
            'content' => 'required',
            'date' => 'required',
            'clock' => 'required',
            'image' =>   'required|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return redirect('/pengurus/inputevent')
                        ->withErrors($validator)
                        ->withInput();
        }

        $destinationPath = 'image'; 
        $profileImage ="image_event".time().".".$request->image->getClientOriginalExtension();
        $request->image->move($destinationPath, $profileImage);
        $img_name = $profileImage;

        $event = Event::find($id);
        $event->title = $request->title;
        $event->content = $request->content;
        $event->date = $request->date;
        $event->clock = $request->clock;
        $event->image = $img_name;
        $event->save();

        return redirect()->back()->with('status', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect()->back()->with('status', 'data sudah berhasil dihapus');
    }
}
