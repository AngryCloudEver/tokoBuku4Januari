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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/users','UserController@index')->name('users.index');
Route::get('/users/create','UserController@create')->name('users.create');
Route::post('/users/store','UserController@store')->name('users.store');
Route::get('/users/{user}/edit','UserController@edit')->name('users.edit');
Route::put('/users/{user}/update','UserController@update')->name('users.update');
Route::delete('/users/{user}/destroy','UserController@destroy')->name('users.destroy');
Route::get('/users/{user}/show','UserController@show')->name('users.show');

Route::get('/categories/trash', 'CategoryController@trash')->name('categories.trash');
Route::get('/categories/{id}/restore', 'CategoryController@restore')->name('categories.restore');
Route::delete('/categories/{id}/delete-permanent', 'CategoryController@deletePermanent')->name('categories.delete-permanent');
Route::get('/ajax/categories/search', 'CategoryController@ajaxSearch');
Route::resource('categories', 'CategoryController');

Route::get('/books/trash',  'BookController@trash')->name('books.trash');
Route::post('/books/{book}/restore',  'BookController@restore')->name('books.restore');
Route::delete('/books/{id}/delete-permanent','BookController@deletePermanent')->name('books.delete-permanent');
Route::resource('books', 'BookController');

Route::resource('orders', 'OrderController');

Auth::routes();
Route::match(["GET", "POST"], "/register", function(){
    return redirect('/login');
})->name('register');

Route::get('/home', 'HomeController@index')->name('home');
