<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ProfileIMG;
use App\Models\ProfileDESC;

class ProfileController extends Controller
{
    
    public function index(){
    	return view('admin/admin_profile');
    }

    public function storeImgProfile(Request $request)
    {
        $input_data = $request->all();

        $validator = Validator::make($input_data, [
            'image' => 'required|mimes:jpg,jpeg,png|max:1024',
        ]);

        if ($validator->fails()) {
            return redirect('/pengurus/profile')
                        ->withErrors($validator)
                        ->withInput();
        }

        $destinationPath = 'profile_image'; 
        $profileImage ="image_profile".time().".".$request->image->getClientOriginalExtension();
        $request->image->move($destinationPath, $profileImage);
        $img_name = $profileImage;

        $profile = new ProfileIMG();
        $profile->image = $img_name;
        $profile->save();

        return redirect()->back()->with('status', 'Data sudah berhasil ditambahkan');
    }

    public function storeDescProfile(Request $request)
    {
        $input_data = $request->all();

        $validator = Validator::make($input_data,[
            'description' => 'required|max:500', 
        ]);

        if ($validator->fails()) {
            return redirect('/pengurus/profile')
                        ->withErrors($validator)
                        ->withInput();
        }

        $profile = new ProfileDESC();
        $profile->description = $request->description;
        $profile->save();

        return redirect()->back()->with('status', 'Data sudah berhasil ditambahkan');
    }

}
