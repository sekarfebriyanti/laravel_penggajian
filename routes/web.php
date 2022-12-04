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

Route::get('/', function () {
    return view('Layout.main');
});

Route::get('/Karyawan/Index', function () {
    return view('/Karyawan/Index');
});

Route::get('/Home/Index', function () {
    return view('/Home/Index');
});
