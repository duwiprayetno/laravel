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
    return view ('pertemuan4/home');

});

Route::get('pertemuan4/about', function () {
    $nama = 'DUWI PRAYETNO';
    return view ('pertemuan4/about');
    
});

Route::get('pertemuan4/profile', function () {
    return view ('pertemuan4/profile');
    
});

Route::get('pertemuan4/mahasiswa', function () {
    return view ('pertemuan4/mahasiswa');
    
});

Route::get('pertemuan4/tugas', function () {
    return view ('pertemuan4/tugas');
    
});

Route::get('/', function () {
    return view ('pertemuan4/home');

});