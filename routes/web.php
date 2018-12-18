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
    $page = 'Home | Upesi Money Transfer';
    return view('frontend.main',compact('page'));
});

Route::get('/about-us', function () {
    $page = 'About | Upesi Money Transfer';
    return view('frontend.about',compact('page'));
});
Route::get('/services', function () {
    $page = 'Services | Upesi Money Transfer';
    return view('frontend.services',compact('page'));
});
Route::get('/networks', function () {
    $page = 'Services | Upesi Money Transfer';
    return view('frontend.network',compact('page'));
});
Route::get('/contact', function () {
    $page = 'Contact Us | Upesi Money Transfer';
    return view('frontend.contact',compact('page'));
});
Route::get('/send-money', function () {
    $page = 'Send Money | Upesi Money Transfer';
    return view('frontend.send-money',compact('page'));
});
//other routes
Route::get('/team', function () {
    $page = 'Team | Upesi Money Transfer';
    return view('frontend.team',compact('page'));
});
Route::get('/careers', 'StaticPageController@careers');
Route::get('/how-it-works', function () {
    $page = 'How it works | Upesi Money Transfer';
    return view('frontend.howitworks',compact('page'));
});
Route::get('/faqs', function () {
    $page = 'FAQs | Upesi Money Transfer';
    return view('frontend.faqs',compact('page'));
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
Route::get('{path}', 'HomeController@main')->where('path', '([A-z\d-\/_.]+)?' );
