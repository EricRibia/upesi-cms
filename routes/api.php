<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources(
    ['pages' => 'API\PagesController']);
Route::apiResources(
    ['user' => 'API\UserController']);
Route::apiResources(
    ['servic' => 'API\ServicesController']);
Route::apiResources(
    ['policy' => 'API\PoliciesController']);
Route::apiResources(
    ['team' => 'API\TeamController']);
Route::apiResources(
    ['countries' => 'API\CountryController']);
    

Route::get('profile', 'API\UserController@profile');

Route::put('profile', 'API\UserController@updateInfo');