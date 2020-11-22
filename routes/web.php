<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/','ShowseminarController@index');
Route::get('/daftar','ShowseminarController@show');
Route::post('/create','AdddataController@insert');
Route::get('/delete','DeleteseminarController@show');
Route::get('hapus/{id}','DeleteseminarController@destroy');
Route::post('addseminar','AddseminarController@addseminar');
Route::get('homesuccess/{id}','ShowseminarController@showsuccess');
Route::get('homepending/{id}','ShowseminarController@showpending');
Route::get('/home','ShowseminarController@showhome');
