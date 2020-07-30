<?php

use App\Http\Controllers\sessionController;
use App\Http\Controllers\UserReviewController;
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

Route::get('/', function () {
    return view('main');
})->name('home');

Route::get('/register', 'RegistrationController@create');

Route::post('/register','RegistrationController@store');

Route::get('/login', 'SessionController@create')->name('login');

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');

Route::get('/reviews/create', 'ReviewController@create')->middleware('auth');

Route::post('/reviews/create', 'ReviewController@store');

Route::get('/reviews', 'ReviewController@index')->middleware('auth');

Route::get('/myreviews', 'UserReviewController@index')->name('myreviews')->middleware('auth');

Route::resource('user_reviews', 'UserReviewController')->middleware('auth');

Route::get('/profile', 'ProfileController@index')->middleware('auth');

Route::post('/profile', 'ProfileController@update_avatar')->middleware('auth');



