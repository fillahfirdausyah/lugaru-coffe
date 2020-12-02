<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $productCount = Product::count();
        $product = Product::all();

        return view('/admin/admin_product', compact('productCount', 'product'));
    }

    public function create()
    {
        return redirect('/pengurus/inputproduct'); 
    }

    public function store(Request $request)
    {
        $input_data = $request->all();

        $validator = Validator::make($input_data, [
            'name' => 'required|max:255',
            'contains' => 'required',
            'category' => 'required',
            'image' =>   'required|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return redirect('/pengurus/inputproduct')
                        ->withErrors($validator)
                        ->withInput();
        }

        $destinationPath = 'image'; 
        $profileImage ="image_product".time().".".$request->image->getClientOriginalExtension();
        $request->image->move($destinationPath, $profileImage);
        $img_name = $profileImage;

        $product = new Product();
        $product->name = $request->name;
        $product->contains = $request->contains;
        $product->category = $request->category;
        $product->image = $img_name;
        $product->save();

        return redirect()->back()->with('status', 'Data berhasil diunggah');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin/admin_editproduct', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $input_data = $request->all();

        $validator = Validator::make($input_data, [
            'name' => 'required|max:255',
            'contains' => 'required',
            'category' =>'required',
            'image' =>   'required|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return redirect('/pengurus/inputproduct')
                        ->withErrors($validator)
                        ->withInput();
        }

        $destinationPath = 'image'; 
        $profileImage ="image_product".time().".".$request->image->getClientOriginalExtension();
        $request->image->move($destinationPath, $profileImage);
        $img_name = $profileImage;

        $product = Product::find($id);
        $product->name = $request->name;
        $product->contains = $request->contains;
        $product->category = $request->category;
        $product->image = $img_name;
        $product->save();

        return redirect()->back()->with('status', 'Data berhasil diubah');   
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back()->with('status', 'data sudah berhasil dihapus');
    }
}
