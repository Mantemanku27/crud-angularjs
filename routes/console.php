<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Rute Console
|--------------------------------------------------------------------------
|
| File ini adalah tempat Anda dapat menentukan semua konsol berbasis Closure Anda
| Perintah. Setiap Closure terikat pada instance perintah yang memungkinkan a
| Pendekatan sederhana untuk berinteraksi dengan metode IO masing-masing perintah.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
