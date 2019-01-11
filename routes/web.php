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
Route::group(['middleware' => 'guest'], function(){
    Route::get('/networks', function () {
        $page = 'Our Networks | Upesi Money Transfer';
        return view('frontend.network',compact('page'));
    });
    Route::get('/contact', function () {
        $page = 'Contact Us | Upesi Money Transfer';
        return view('frontend.contact',compact('page'));
    });
    Route::get('/how-it-works', function () {
        $page = 'How it works | Upesi Money Transfer';
        return view('frontend.howitworks',compact('page'));
    });
    Route::get('/bank-deposits', function () {
        $page = 'Bank Deposits | Upesi Money Transfer';
        return view('frontend.servic.bank-depo', compact('page'));
    });
    Route::get('/cash-pickups', function () {
        $page = 'Cash pickups | Upesi Money Transfer';
        return view('frontend.servic.cash-pic', compact('page'));
    });
    Route::get('/mobile-wallets', function () {
        $page = 'Mobile Wallets | Upesi Money Transfer';
        return view('frontend.servic.mobile-wal', compact('page'));
    });
    Route::get('/bill-payments', function () {
        $page = 'Bill payments | Upesi Money Transfer';
        return view('frontend.servic.dir-bil', compact('page'));
    });

});

Route::get('/', 'HomeController@home_page')->middleware('guest');
Route::get('/about-us', 'HomeController@about_us');
Route::get('/services', 'HomeController@services_page');




//other routes
Route::get('/team', 'HomeController@team_page');
Route::get('/careers', 'StaticPageController@careers');

Route::get('/faqs', 'HomeController@faqs_page');

Route::get('/privacy-policy', 'HomeController@Privacy_page');
Route::get('/terms-use', 'HomeController@terms_page');
//services routes


//countries routes
Route::get('/countries/{slug}', 'HomeController@country_pages');

Route::get('/canada', function () {
    $page = 'Canada | Upesi Money Transfer';
    return view('frontend.countries.canada', compact('page'));
});
Route::get('/ethiopia', function () {
    $page = 'Ethiopia | Upesi Money Transfer';
    return view('frontend.countries.ethiopia', compact('page'));
});
Route::get('/europe', function () {
    $page = 'Europe | Upesi Money Transfer';
    return view('frontend.countries.europe', compact('page'));
});
Route::get('/ghana', function () {
    $page = 'Ghana | Upesi Money Transfer';
    return view('frontend.countries.ghana', compact('page'));
});
Route::get('/india', function () {
    $page = 'India | Upesi Money Transfer';
    return view('frontend.countries.india', compact('page'));
});
Route::get('/kenya', function () {
    $page = 'Kenya | Upesi Money Transfer';
    return view('frontend.countries.kenya',compact('page'));
});
Route::get('/nigeria', function () {
    $page = 'Nigeria | Upesi Money Transfer';
    return view('frontend.countries.nigeria', compact('page'));
});
Route::get('/rwanda', function () {
    $page = 'Rwanda | Upesi Money Transfer';
    return view('frontend.countries.rwanda', compact('page'));
});
Route::get('/tanzania', function () {
    $page = 'Tanzania | Upesi Money Transfer';
    return view('frontend.countries.tanzania', compact('page'));
});
Route::get('/uganda', function () {
    $page = 'Uganda | Upesi Money Transfer';
    return view('frontend.countries.uganda', compact('page'));
});
Route::get('/usa', function () {
    $page = 'USA | Upesi Money Transfer';
    return view('frontend.countries.usa', compact('page'));
});
Auth::routes();
Route::post('userforms','ContactController@userforms')->name('contacts.userforms');
Route::get('/dashboard', 'HomeController@index')->name('dashboard')->middleware('auth');;
Route::get('{path}', 'HomeController@index')->where('path', '([A-z\d-\/_.]+)?' )->middleware('auth');;
