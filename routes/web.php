<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/new-login',function () {
    return view('newLogin');
});
Route::get('/fatboy',function () {
    return view('fatboy');
});
Route::get('/fatbob',function () {
    return view('fatbob');
});
Route::get('/iron',function () {
    return view('iron');
});
Route::get('/new-register',function () {
    return view('newRegister');
});
Route::get('/new-forget',function () {
    return view('newForget');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
