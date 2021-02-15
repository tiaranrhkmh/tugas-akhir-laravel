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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('welcome');
});
Auth::routes();
Route::get('/login','AuthController@login')->name('login');
Route::post('/login','AuthController@postlogin')->name('postlogin');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home/book', 'BookReturnController@index');
    Route::get('/home/book/{id}', 'BookReturnController@show')->name('book');
    Route::get('payments/finish', 'PaymentController@finish');
    Route::get('payments/failed', 'PaymentController@failed');
    Route::get('payments/unfinish', 'PaymentController@unfinish');
});
Route::post('payments/notification', 'PaymentController@notification');


