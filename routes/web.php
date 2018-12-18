<?php

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
// main routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('frontend.about');
});
Route::get('/services', function () {
    return view('frontend.services');
});
Route::get('/networks', function () {
    return view('frontend.network');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/send-money', function () {
    return view('frontend.send-money');
});
//other routes
Route::get('/team', function () {
    return view('frontend.team');
});
Route::get('/careers', 'StaticPageController@careers');
Route::get('/how-it-works', function () {
    return view('frontend.howitworks');
});
Route::get('/faqs', function () {
    return view('frontend.faqs');
});
Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy');
});
Route::get('/terms-use', function () {
    return view('frontend.terms-use');
});
//services routes
Route::get('/bank-deposits', function () {
    return view('frontend.servic.bank-depo');
});
Route::get('/cash-pickups', function () {
    return view('frontend.servic.cash-pic');
});
Route::get('/mobile-wallets', function () {
    return view('frontend.servic.mobile-wal');
});
Route::get('/bill-payments', function () {
    return view('frontend.servic.dir-bil');
});
//countries routes
Route::get('/australia', function () {
    return view('frontend.countries.australia');
});
Route::get('/canada', function () {
    return view('frontend.countries.canada');
});
Route::get('/ethiopia', function () {
    return view('frontend.countries.ethiopia');
});
Route::get('/europe', function () {
    return view('frontend.countries.europe');
});
Route::get('/ghana', function () {
    return view('frontend.countries.ghana');
});
Route::get('/india', function () {
    return view('frontend.countries.india');
});
Route::get('/kenya', function () {
    return view('frontend.countries.kenya');
});
Route::get('/nigeria', function () {
    return view('frontend.countries.nigeria');
});
Route::get('/rwanda', function () {
    return view('frontend.countries.rwanda');
});
Route::get('/tanzania', function () {
    return view('frontend.countries.tanzania');
});
Route::get('/uganda', function () {
    return view('frontend.countries.uganda');
});
Route::get('/usa', function () {
    return view('frontend.countries.usa');
});
Auth::routes();
Route::post('contact', 'ContactController@userforms');
Route::resource('main', 'FormController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/backend', 'HomeController@main')->name('backend');
Route::get('{path}', 'HomeController@main')->where('path', '([A-z\d-\/_.]+)?' );
