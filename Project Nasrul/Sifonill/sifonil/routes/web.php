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
use App\nilai;

Route::get('/', function () {
    return view('Auth/login');
});
Route::get('/pelajaran', function () {
    return view('siswa/pelajaran');
});
Route::get('/add', function () {
    return view('Auth/register');
});
Route::get('/nilaipelajaran/{idmapel}/{userid}', 'SiswaController@nilaipelajaran');
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/pelajaran/{userid}', 'SiswaController@pelajaran');
Route::get('/nilaisiswa/{userid}', 'SiswaController@nilaisiswa');
Route::get('/detailnilai/{idmapel}/{userid}', 'SiswaController@detailnilai');


Route::get('/daftarkelas/{userid}', 'guruController@daftarkelas');
Route::get('/lihatkelas/{idkelas}', 'guruController@lihatkelas');

Route::get('/nilaikelas/{userid}', 'guruController@tambahnilai');
Route::get('/nilaikelas/{idkelas}/{idmapel}', 'guruController@tambahnilaikelas');

Route::get('/editnilai/{userid}', 'guruController@editnilai');
Route::get('/editnilai/{idkelas}/{idmapel}', 'guruController@editnilaikelas');

Route::get('/kosongkannilai/{userid}', 'guruController@kosongkannilai');
Route::get('/kosongkannilai/{idkelas}/{idmapel}', 'guruController@kosongkannilaikelas');

Route::patch('updatenilai/{idmapel}/{nis}', 'guruController@update');

