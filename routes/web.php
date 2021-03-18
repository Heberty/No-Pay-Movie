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
    return view('pages.index');
})->name('index');

Route::group(['namespace' => 'Pages'], function() {
    Route::get('/', 'PagesController@index')->name('home');
});

Route::get('/admin', 'Admin\AdminController@index')->name('Admin.index');
Route::get('/admin/usuarios', 'Admin\AdminController@viewUsers')->name('Admin.users.index');
Route::get('/admin/produtos', 'Admin\AdminController@viewProducts')->name('Admin.products.index');
Route::post('/enviar', 'ContatoController@enviaContato')->name('send');

Auth::routes();