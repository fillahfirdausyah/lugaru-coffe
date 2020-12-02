<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleryCount = Gallery::count();
        $gallery = Gallery::all();
        return view('admin.admin_gallery', compact('galleryCount', 'gallery'));
    }

    public function create()
    {
        return redirect('/pengurus/inputgallery');   
    }

    public function store(Request $request)
    {
        $input_data = $request->all();
        $validator = Validator::make($input_data, [
            'name' => 'required|max:255',
            'description' => 'required',
            'image' =>   'required|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return redirect('/pengurus/inputgallery')
                        ->withErrors($validator)
                        ->withInput();
        }

        $destinationPath = 'image'; 
        $profileImage ="image".time().".".$request->image->getClientOriginalExtension();
        $request->image->move($destinationPath, $profileImage);
        $img_name = $profileImage;

        $gallery = new Gallery();
        $gallery->name = $request->name;
        $gallery->description = $request->description;
        $gallery->image = $img_name;
        $gallery->save();

        return redirect()->back()->with('status', 'Data berhasil diunggah');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);

        return view('admin/admin_editgallery', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $input_data = $request->all();

        $validator = Validator::make($input_data, [
            'name' => 'required|max:255',
            'description' => 'required',
            'image' =>   'required|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return redirect('/pengurus/inputgallery')
                        ->withErrors($validator)
                        ->withInput();
        }

        $destinationPath = 'image'; 
        $profileImage ="image".time().".".$request->image->getClientOriginalExtension();
        $request->image->move($destinationPath, $profileImage);
        $img_name = $profileImage;

        $gallery = Gallery::find($id);
        $gallery->name = $request->name;
        $gallery->description = $request->description;
        $gallery->image = $img_name;
        $gallery->save();

        return redirect()->back()->with('status', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();

        return redirect()->back()->with('status', 'data sudah berhasi dihapus');
    }
}
