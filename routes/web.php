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
    return view('welcome');
});
//Route::get('/abc', function () {
    //return view('home');
//});
Route::get('/pendapatan/grafik', function () {
    return view('grafikpendapatan');
})->name("grafik");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pendapatan', 'PendapatanController@index')->name("pendapatan"); //pendapatan 
Route::get('/pengunjung', 'PengunjungController@index')->name("pengunjung"); //pendapatan 

