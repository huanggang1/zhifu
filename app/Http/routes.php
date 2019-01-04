<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get("zhifu/", 'Home\IndexController@getIndex');
Route::get("getList", 'Home\IndexController@getList');
Route::post("asyn/getAsyn", 'Home\IndexController@getAsyn');
Route::post("asyn/getWeixin", 'Home\IndexController@getWeixin');
Route::get("multiCode", 'Home\IndexController@getMulticode');
Route::get("barcode", 'Home\IndexController@getBarcode');
Route::post("submit", 'Home\IndexController@geSubmit');

//支付
Route::get('payment', 'PaymentController@getIndex');
Route::get('checkstatus', 'PaymentController@getCheckstatus');
