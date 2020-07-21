<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//route get and parameter

// Route::get('/home', function () {
//     return "hello";
// });

// Route::get('/test/{id}', function ($id) {
//     return  "wllcome"." ".$id;
// });


//route name

// Route::get('/test/{id}', function ($id) {
//     return  "wllcome"." ".$id;
// }) -> name('hello');

// Route::get('/home','Front\FirstController@showString');

Route::get('/','Front\FirstController@genralpage');


// Route::resource("news","NewsController");

// routes for posts and ligin

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/redirect/{service}','SocialController@redirect');

Route::get('/callback/{service}','SocialController@callback');

Route::resource('posts','PostController');


// routs for offers



Route::group(['prefix' => 'offers'],function(){
    Route::get('/','OffersController@index');
    Route::get('/myoffers','OffersController@myoffers');

    Route::get('/create','OffersController@create');
    Route::post('/store','OffersController@store')->name('offers.store');

    Route::get('/cart','OffersController@cart');
    Route::get('/heart','OffersController@heart');

});
