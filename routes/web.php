<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/testing', function () {
    return view('/psitest/index');
})->name('test');

Route::get('/landing', function () {
    return view('/landing');
})->name('landing');

Route::post('/', 'UsersResultController')->name('UsersResult');
Route::post('/test', 'TestResultController')->name('TestResult');

Route::group(['namespace' => 'Admin', 'prefix' => 'adminka79', 'middleware' => ['auth', 'admin', 'verified']], function () {
    Route::get('/', 'IndexController')->name('admin');
    Route::get('/custumer', 'CustumerController')->name('custumer');
    Route::delete('/custumer/{user}', 'CustumerController@delete')->name('custumer.delete');
});

Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/welcome', function(){
    return view('welcome');
})->name('welcome');

Route::get('/reg', function (){
    return view('/auth/register');
});

Route::group(['namespace' => 'User', 'prefix' => 'user', 'middleware' => ['auth', 'user', 'verified']], function () {
    Route::get('/', 'IndexController')->name('user');
    Route::get('/curses', 'CursesController')->name('curses');
    Route::get('/test', 'TestController')->name('test-form');
});
