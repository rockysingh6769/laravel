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

Route::get('/about','testController@about');

// what is middleware :-
// Middleware like work as a condition before execute the function checking conditionn in create in       middleware file in this case file name is test there are different different ways to use middleware.

// How to use middleware :-
// 2. Secound one is in the controller file we create contruct function and use middleware inside construct
//    function eg:- 
    // public function __construct()
    // {
    // 	$this->middleware('test');
    // }


//first way call middleware before call any controller function  

// This is Secoundway







