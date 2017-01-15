<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('login', function () {
    return view('login');
});

Route::resource('book', 'BookController');

Route::get('addBasket', 'BasketController@add');
Route::get('getBasket', 'BasketController@get');
Route::get('removeBasket', 'BasketController@remove');

Route::get('logout', 'LoginController@getLogout');

Auth::routes();
Route::get('user/login', 'Auth\LoginController@getLogin');
Route::post('user/login', 'Auth\LoginController@postLogin');
Route::get('auth/logout', 'Auth\LoginController@getLogout');
Route::get('user/logout', function(){
    Session::put('user_type', null);
    return redirect('/auth/logout');
});

Route::get('/home', 'HomeController@index');
