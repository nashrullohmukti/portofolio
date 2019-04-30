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
Auth::routes();

Route::get('/', function () {
  return view('auth.login');
});

Route::get('/spareparts_gal', 'HomeController@index');
Route::get('/search', 'HomeController@search');

Route::group(['middleware' => 'admin'], function(){
  Route::get('/admin', function(){
    return view('user.admin.home');
  });
  Route::get('/register', function(){
    return view('auth.register');
  });
  Route::get('machines/download/{type}', 'MachineController@downloadMachines');
  Route::post('machines/importExcel', 'MachineController@importExcel');
  Route::resource('machines','MachineController');
  Route::resource('spareparts','SparepartController');
});
