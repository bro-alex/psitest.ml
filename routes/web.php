<?php

use Illuminate\Support\Facades\Route;



Route::get('/testing', function () {
    return view('/psitest/index');
});

Route::get('/test', function () {
    return view('/psitest/test');
});

Route::post('/', 'UsersResultController')->name('UsersResult');
Route::post('/test', 'TestResultController')->name('TestResult');

Route::group(['namespace' => 'Admin', 'prefix' => 'adminka79', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'IndexController')->name('admin');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/reg', function (){
    return view('/auth/register');
});
