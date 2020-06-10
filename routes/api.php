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
//pack with image
Route::get('/packs/images','PackController@pack_images');
//pack with reservation
Route::get('/packs/reservation','PackController@pack_reservation');

Route::get('/villes','VilleController@index');
Route::get('/packs','PackVilleController@index');
Route::get('/packs/{id}','PackVilleController@show');

Route::get('/packs/{id}/ville','PackVilleController@showPacksVille');

Route::get('searchPacks','PackVilleController@search');
Route::post('storePacks','PackVilleController@store');
Route::post('storePhotos','PhotoController@store');

//post client
Route::post('storeClient','ClientController@store');



