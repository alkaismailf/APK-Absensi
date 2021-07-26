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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/karyawan', 'karyawanController@index')->name('karyawan');
Route::post('/karyawan/create', 'karyawanController@create');
Route::get('/karyawan/{id}/edit', 'karyawanController@edit');
Route::post('/karyawan/{id}/update', 'karyawanController@update');
Route::get('/karyawan/{id}/delete', 'karyawanController@delete');

Route::get('/absensi', 'absensiController@index');
Route::get('/laporan', 'absensiController@indexLaporan');

Route::get('/', 'authController@showFormLogin')->name('login');
Route::get('login', 'authController@showFormLogin')->name('login');
Route::post('login', 'authController@login');
Route::get('register', 'authController@showFormRegister')->name('register');
Route::post('register', 'authController@register');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('logout', 'authController@logout')->name('logout');
 
});
