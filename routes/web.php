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

use Illuminate\Support\Facades\Route;

Route::get('/','MainPageController@index');

Route::get('/film/{film_id}','FilmPageController@index');
Route::get('/category','MainPageController@category_filter');
Route::get('/favorite','FavoriteFilmController@index');

Route::post('/addFavorite','FavoriteFilmController@addToFavorite');

    Route::post('/delFavorite','FavoriteFilmController@delFromFavorite');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verify/{token?}', 'Auth\RegisterController@verify')->name('register.verify');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('password/reset/{token?}', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/reset', 'Auth\ForgotPasswordController@reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Auth::routes();




Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/profile_change','HomeController@profile_change');



Route::get('/home/password_change',function (){
    return view('profile_pass_change');
});
Route::post('changePassword','HomeController@changePassword')->name('changePassword');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/profile_update','HomeController@profile_update');




