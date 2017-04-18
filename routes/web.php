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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('/articles', 'ArticlesController');

Route::get('/', function () {
    $greeting = 'hello';
    //return view('welcome')->with('greeting', $greeting);
    return view('index')->with([
	'greeting' => $greeting,
	'items' => ['Apple', 'Banana']
    ]);
});

Route::get('/second', function () {
    $greeting = 'hello';
    return view('index', [
	'greeting' => $greeting,
	'greeting2' =>  $greeting2
    ]);
});

Route::get('/property', function () {
    $greeting = 'hello';
    $view = view('index'); 
    $view->greeting = "Hey~ What`s up";
    $view->name = "everyone";
    return $view;
});
