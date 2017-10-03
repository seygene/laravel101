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

Route::get('auth/login', function() {
    $credentials = [
        'email' => 'john@abc.com',
        'password' => 'password'
    ];
    
    if(! auth()->attempt($credentials)) {
        return '로그인 실패!!';
    }
    return redirect('protected');
});

Route::get('protected', ['middleware'=>'auth', function() {
    dump(session()->all());
    if(!auth()->check()) {
        //return "누구세요??";
    }
    return "어서오세요 ".auth()->user()->name;
}]);

Route::get('auth/logout', function() {
    auth()->logout();
    return "See you again~!";
});

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
