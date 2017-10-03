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

Route::get('/', 'WelcomeController@index');

Route::resource('/articles', 'ArticleController');

Route::get('/templatetest', function () {
    return view('templatetest');
});

Route::get('/test/{bar?}', function ($bar = "default") {
    return $bar;
});

Route::get('/blade/{name?}', function($name = 'kakaka') {
    $items = ['apple', 'banana', 'orange', 'mu'];
    return view('bladetest', [
        'name' => $name, 
        'greeting' => 'Hiii',
        'item' => $items,
        'drink' => [3,4],
    ]);
});
