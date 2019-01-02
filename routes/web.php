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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('mahasiswa','mahasiswaController');

Route::post('mahasiswa', 'mahasiswaController@index');

Route::resource('mahasiswas','mahasiswasController');

Route::post('mahasiswas', 'mahasiswasController@index');

Route::get('excel','mahasiswaController@export')->name('mahasiswa.excel');

Route::get('/getRequest',function(){
  if(Request::ajax()){
    return 'getRequest has loaded completely';
  }
});
