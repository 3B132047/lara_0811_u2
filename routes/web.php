<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return 'welcome';
});
Route::get('r1', function () {
    return redirect('r2');
});
Route::get('hello/{name?}', function ($name = 'Everbody') {
    return 'Hello,'.$name;
});
Route::get('hello.index', function ($name = 'Everbody') {
    return 'Hello,'.$name;
});
Route::get('dashboard', function () {
    return 'dashboard';
});
Route::group(['prefix'=>'admin'], function () {
    Route::get('dashboard', function () {
        return 'admin dashboard';
    });
});