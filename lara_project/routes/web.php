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
/*
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@verify');
Route::get('/logout','LogoutController@index');

Route::group(['middleware'=>'spadmin'], function(){

    Route::get('/superadmin','SuperHomeController@index');
    Route::get('/admin','SuperHomeController@admin');
    Route::get('/superadmin/dashboard','SuperHomeController@index')->middleware('spadmin');
    Route::get('/superadmin/adminlist','SuperHomeController@adminlist');
    Route::get('/superadmin/adminedit/{id}','SuperHomeController@edit');
    Route::post('/superadmin/adminedit/{id}','SuperHomeController@update');
    Route::get('/admin/delete/{id}', 'SuperHomeController@delete');
    Route::post('/admin/delete/{id}', 'SuperHomeController@destroy');
    Route::get('/superadmin/admincreate', 'SuperHomeController@create');
    Route::post('/superadmin/admincreate', 'SuperHomeController@store');


    Route::get('/superadmin/clientlist', 'AdminController@clientlist');
    Route::get('/superadmin/clientedit/{id}', 'AdminController@edit');
    Route::post('/superadmin/clientedit/{id}', 'AdminController@update');
    Route::get('/superadmin/clientcreate', 'AdminController@create');
    Route::post('/superadmin/clientcreate', 'AdminController@store');



});
