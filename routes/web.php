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

Route::get('/home', 'HomeController@index');

//Route::controller('datatables', 'DatatablesController', [
//    'anyData'  => 'datatables.data',
//    'getIndex' => 'datatables',
//]);


Route::get('datatables/anyData', 'DatatablesController@anyData');
Route::get('datatables/getData', 'DatatablesController@getData');
Route::get('datatables', 'DatatablesController@getIndex');
Route::get('dash', 'HomeController@dash');
Route::any('submit', 'HomeController@update');