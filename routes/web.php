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
//Route::get('about','PagesController@about');
Route::get('/contact','testController@contact');

// Route::get('/file',function(){
//    return view('file.home');
// })->middleware('test:test');

Route::get('/about','testController@about')->middleware('test');

// what is middleware :-
// Middleware like work as a condition before execute the function checking conditionn in create in       middleware file in this case file name is test there are different different ways to use middleware.

// How to use middleware :-
// There are three ways  to use in App/Http/Kernel file already has functions following example :-.
// 1. first one is in  this file has protected $routeMiddleware array add middleware file path like
//   'test' =>   \App\Http\Middleware\test::class,  


//first way call middleware before call any controller function  

// This is firstway






