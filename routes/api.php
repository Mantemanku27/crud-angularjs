<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Rute API
|--------------------------------------------------------------------------
|
| Di sinilah Anda bisa mendaftarkan rute API untuk aplikasi Anda. Ini
| Rute dimuat oleh RouteServiceProvider dalam grup yang
| Ditugaskan kelompok middleware "api". Nikmati membangun API Anda!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

// Rute API Tabel Siswa
Route::resource('siswas','SiswaController');
