<?php

/*
|--------------------------------------------------------------------------
| Rute Web
|--------------------------------------------------------------------------
|
| File ini adalah tempat Anda dapat menentukan semua rute yang ditangani
| Dengan aplikasi anda Katakan saja kepada Laravel bahwa URI seharusnya merespons
| Untuk menggunakan metode Closure atau controller. Bangun sesuatu yang hebat!
|
*/

Route::get('/', function () {
    return view('welcome');
});

