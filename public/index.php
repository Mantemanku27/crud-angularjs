<?php

/**
 * Laravel - Framework PHP untuk Developer Web
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

/*
|--------------------------------------------------------------------------
| Daftarkan Auto Loader
|--------------------------------------------------------------------------
|
| Komposer menyediakan loader kelas yang mudah dibuat secara otomatis
| Aplikasi kami Kita hanya perlu memanfaatkannya! Kita hanya membutuhkannya
| Ke script disini agar kita tidak perlu khawatir dengan manual
| Loading salah satu kelas kami nanti. Rasanya enak untuk bersantai.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Nyalakan lampunya
|--------------------------------------------------------------------------
|
| Kita perlu menerangi perkembangan PHP, jadi mari kita nyalakan lampu.
| Ini bootstraps kerangka dan mendapatkannya siap untuk digunakan, maka itu
| Akan memuat aplikasi ini sehingga kita bisa menjalankannya dan mengirimnya
| Tanggapan kembali ke browser dan menyenangkan pengguna kami.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Jalankan Aplikasi
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
