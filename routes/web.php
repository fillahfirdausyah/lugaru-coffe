<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//User 
Route::get('/', 'WebsiteController@index');
Route::get('/product', 'WebsiteController@indexProduct');
Route::post('/product/category', 'WebsiteController@category');
Route::get('/gallery', 'WebsiteController@indexGallery');
Route::get('/event', 'WebsiteController@indexEvent');
Route::post('/feedback', 'WebsiteController@storeFeedback');
Route::get('/captchareload', 'WebsiteController@reloadCaptcha');
Route::get('/listmenu', 'WebsiteController@indexMenu');


//Admin  
Auth::routes();

	// Route::middleware(['auth'])->group(function () {
    Route::get('/pengurus', function () {
        return view('admin/main_admin');
    });

    //profile
    Route::get('/pengurus/profile', 'ProfileController@index');
    Route::post('/pengurus/profile/img', 'ProfileController@StoreImgProfile');
    Route::post('/pengurus/profile/desc', 'ProfileController@storeDescProfile');

	//gallery
	Route::get('/pengurus/gallery', 'GalleryController@index');
	Route::get('/pengurus/inputgallery', function () {
	    return view('admin/admin_inputgallery');
	});
	Route::post('/pengurus/inputgallery', 'GalleryController@store');
	Route::get('/pengurus/editgallery/{id}', 'GalleryController@edit');
	Route::post('/pengurus/editgallery/{id}', 'GalleryController@update');
	Route::delete('/pengurus/deletegallery/{id}', 'GalleryController@destroy');

	//event
	Route::get('/pengurus/event', 'EventController@index');
	Route::get('/pengurus/inputevent', function(){
	    return view('admin/admin_inputevent');
	});
	Route::post('/pengurus/inputevent', 'EventController@store');
	Route::get('/pengurus/editevent/{id}', 'EventController@edit');
	Route::post('/pengurus/editevent/{id}', 'EventController@update');
	Route::delete('/pengurus/deleteevent/{id}', 'EventController@destroy');

	//product
	Route::get('/pengurus/product', 'ProductController@index');
	Route::get('/pengurus/inputproduct', function(){
	    return view('admin/admin_inputproduct');
	});
	Route::post('/pengurus/inputproduct', 'ProductController@store');
	Route::get('/pengurus/editproduct/{id}', 'ProductController@edit');
	Route::post('/pengurus/editproduct/{id}', 'ProductController@update');
	Route::delete('/pengurus/deleteproduct/{id}', 'ProductController@destroy');

	//feedback
	Route::get('/pengurus/feedback', 'FeedbackController@index');
	Route::delete('/pengurus/deletefeedback/{id}', 'FeedbackController@destroy');

// });