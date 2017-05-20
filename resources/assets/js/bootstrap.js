window._ = require('lodash');

/**
 * Kami akan memuat jQuery dan plugin jQuery Bootstrap yang memberikan dukungan
 * Untuk fitur Bootstrap berbasis JavaScript seperti modals dan tabs. Ini
 * Kode dapat dimodifikasi agar sesuai dengan kebutuhan spesifik aplikasi Anda.
 */

window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');

/**
 * Vue adalah perpustakaan JavaScript modern untuk membangun antarmuka web interaktif
 * Menggunakan komponen pengikat data reaktif dan reusable. API Vue bersih
 * Dan sederhana, membuat Anda fokus untuk membangun proyek besar berikutnya.
 */

window.Vue = require('vue');
require('vue-resource');

/**
 * Kami akan mendaftarkan pencegat HTTP untuk melampirkan header "CSRF" ke masing-masing
 * Permintaan keluar yang dikeluarkan oleh aplikasi ini. Middleware CSRF
 * Disertakan dengan Laravel secara otomatis akan memverifikasi nilai header.
 */

Vue.http.interceptors.push((request, next) => {
    request.headers['X-CSRF-TOKEN'] = Laravel.csrfToken;

    next();
});

/**
 * Echo mengekspos API ekspresif untuk berlangganan saluran dan mendengarkan
 * Untuk acara yang disiarkan oleh Laravel. Echo dan acara penyiaran
 * Memungkinkan tim Anda untuk dengan mudah membangun aplikasi web real-time yang kuat.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
