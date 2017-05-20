const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Manajemen Aset Elixir
 |--------------------------------------------------------------------------
 |
 | Elixir menyediakan API yang bersih dan fasih untuk menentukan beberapa tugas Gulp dasar
 | Untuk aplikasi Laravel Anda. Secara default, kita menyusun Sass
 | File untuk aplikasi kita, serta menerbitkan vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
});
