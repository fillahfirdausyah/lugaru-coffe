<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CaptchaValidationController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Gallery;
use App\Models\Event;
use App\Models\Feedback;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get gallery image
        $gallery = Gallery::orderBy('id', 'desc')->take(9)->get();

        //get product image
        $product = Product::orderBy('id', 'desc')->take(9)->get();

        //get event image
        $event = Event::orderBy('id', 'desc')->take(6)->get();

        return view('layouts.master', compact('event', 'product', 'gallery'));
    }

    public function indexGallery()
    {
        $gallery = Gallery::paginate(21);

        return view('visit/gallery', compact('gallery'));
    }

    public function indexProduct()
    {
        $product = Product::paginate(20);

        return view('visit/product', compact('product'));
    }

    public function indexEvent()
    {
        $event = Event::paginate(20);

        return view('visit/event', compact('event'));
    }

    public function category(Request $request)
    {
        $category = $request->get('query');
        if($category == "all"){
            $product = Product::all();
        }else{
            $product = DB::table('product')->where('category','LIKE', "%{$category}%")->get();
            if($product->count() <= 0){
                return "<div class='text-center'>Data Kosong</div>";
            }
        }

        $output = "<div class='row'>";
        foreach ($product as $p) {
            $output .= "<div class='col-md-4 product mb-3'><img src='".asset('image/'.$p->image)."' height='350'><div class='contains'><div class='text'><span class='product-title'>". $p->name."</span><br><p>Kandungan :". $p->contains."</p></div></div></div>";
        }
        $output .= "</div>";

        return $output;

    }

    public function storeFeedback(Request $request)
    {
        $input_data = $request->all();

        $validator = Validator::make($input_data, [
            'email' => 'required|email',
            'feedback' => 'required|max:255',
            'captcha' => 'required|captcha'
        ]);

        if ($validator->fails()) {
            return redirect('/#contact')
                        ->withErrors($validator)
                        ->withInput();
        }

        $fb = new Feedback();
        $fb->email = $request->email;
        $fb->feedback = $request->feedback;
        $fb->captcha = $request->captcha;
        $fb->save();

        return redirect('/#contact')->with('status', 'Thank you for your feedback!');
    }
 
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
