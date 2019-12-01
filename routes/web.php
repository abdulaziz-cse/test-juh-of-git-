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



Route::get('/', 'PostController@index');
Route::get('/about', 'PostController@about');
Route::get('/signinc', 'PostController@signinc');
Route::get('/contact', 'PostController@contact');
Route::get('/text', 'PostController@text');
Route::get('/comfile', 'PostController@comfile');
Route::post('/comfile', 'PostController@store');

Route::get('/cheakbox', 'PostController@show');
Route::post('/cheakbox', 'PostController@show');

Route::get('/Blood', 'PostController@Blood');

Route::post('/sendBlood', 'PostController@storeblood');
Route::get('/sendBlood', 'PostController@comfiles');

Route::get('/comfiles', 'PostController@comfiles');

Route::get('/sendBlood', 'PostController@sendBlood');


Route::get('/sendMony', 'PostController@sendMony');

Route::post('/Mony', 'PostController@storemony');
Route::get('/Monys', 'PostController@Monys');

Route::resource('monys', 'PostController');


Route::resource('posts', 'PostController');

Route::resource('sends', 'PostController');

// Comments
Route::post('posts/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
Route::put('posts/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);

Auth::routes();

Route::post('pay', 'PaymentController@payWithPaypal')->name('pay');
Route::get('cancel', 'PaymentController@cancel')->name('cancel');
Route::get('paynow', 'PaymentController@paynow')->name('paynow');
Route::get('home', 'HomeController@index')->name('home');
Auth::routes();


