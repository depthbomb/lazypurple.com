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

Route::get('/', ['uses' => 'PageController@index', 'as' => 'index']);

Route::get('page/server-info', ['uses' => 'PageController@pageRules', 'as' => 'serverinfo']);
Route::get('page/donate', ['uses' => 'PageController@pageDonate', 'as' => 'donate']);

Route::get('donate-success', ['uses' => 'PageController@pageDonateSuccess', 'as' => 'donatesuccess']);
Route::get('donate-fail', ['uses' => 'PageController@pageDonateFail', 'as' => 'donatefail']);

Route::get('connect-to/{ip}', ['uses' => 'PageController@connectToServer', 'as' => 'play']);

Route::get('ajax/servers', ['uses' => 'AjaxController@servers']);