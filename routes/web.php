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


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function() {
    route::get('/', 'DashboardController@index')->name('admin.index');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function (){
    return redirect(route('admin.index'));
})->name('home');
