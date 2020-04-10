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

Route::get('/base_line', function () {
    return view('welcome');
});

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts','PostsController');
/*
Route::get('/about', function () {
    return view('pages.about');
});

*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/posts/{post}/comments','CommentsController@store')->name('addComment');
Route::get('/post', 'PostsController@index');

//Myron
Route::post('/like','PostsController@likePost')->name('like');

Route::get('/chat', 'ChatController@index');
