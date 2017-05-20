/**
 * Pertama kita akan memuat semua dependensi JavaScript proyek ini
 * Termasuk Vue dan Vue Resource. Ini memberi titik awal yang bagus
 * Membangun aplikasi web yang kuat dan kuat menggunakan Vue dan Laravel.
 */

require('./bootstrap');

/**
 * Selanjutnya, kita akan membuat contoh aplikasi Vue segar dan melampirkannya
 * Bagian tubuh halaman Dari sini, Anda mungkin mulai menambahkan komponen ke
 * Aplikasi, atau merasa bebas untuk men-tweak pengaturan ini untuk kebutuhan anda.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: 'body'
});
