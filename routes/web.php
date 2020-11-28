<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','ShowseminarController@index');
Route::get('/daftar','ShowseminarController@show');
Route::post('/create','AdddataController@insert');
Route::get('/delete','DeleteseminarController@show');
Route::get('hapus/{id}','DeleteseminarController@destroy');
Route::post('addseminar','AddseminarController@addseminar');
Route::get('homesuccess/{id}','ShowseminarController@showsuccess');
Route::get('homepending/{id}','ShowseminarController@showpending');
Route::get('/home','ShowseminarController@showhome');

Route::get('/admin','AdminController@index');
//seminar
Route::get('/list_seminar','SeminarController@index');
Route::get('/add_seminar','SeminarController@create');
Route::post('/store_seminar','SeminarController@store');
Route::get('/edit_seminar/{id}','SeminarController@edit');
Route::put('/update_seminar','SeminarController@update');
Route::delete('/delete_seminar/{id}','SeminarController@destroy');
//registration
Route::get('/listregistration','RegistrationController@index');
