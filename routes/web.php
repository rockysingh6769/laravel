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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('todo','todocontroller');
Route::get('/','HomeController@index');
Route::get('about','PagesController@about');
Route::get('/contact','testController@contact');

 Route::get('/file',function(){
    return view('file.home');
 })->middleware('test:michael,michael');

//Route::post('send','mailController@send');
//Route::get('email','mailController@email');
Route::get('send','mailController@send');

Route::get('sendMail','mailtrapController@index');









