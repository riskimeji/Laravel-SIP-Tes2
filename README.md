# Proyek Perpustakaan dengan Laravel 10 dan Tailwind CSS

Repository ini merupakan bagian dari proyek perpustakaan yang dibangun menggunakan Laravel 10 dan Tailwind CSS. Proyek ini memiliki dua peran utama: "Staff" dan "Member", masing-masing dengan kemampuan yang berbeda sesuai perannya.

## Deskripsi Proyek

Proyek ini bertujuan untuk membuat sistem perpustakaan yang ramah pengguna (user-friendly) dan responsif. Saya menggunakan Laravel 10 sebagai kerangka kerja utama dan Tailwind CSS untuk mempercantik tampilan sistem. Formulir login dan berbagai halaman lainnya dirancang untuk memberikan pengalaman pengguna yang nyaman dan responsif, sehingga dapat diakses dengan baik di berbagai perangkat dan lebar layar.

## Langkah-langkah Instalasi

Berikut adalah langkah-langkah untuk menginstal proyek Perpustakaan dengan Laravel 10 dan Tailwind CSS:

### Prasyarat

Pastikan Anda telah menginstal [Composer](https://getcomposer.org/) di komputer Anda.
Pastikan Anda telah menginstal [Node](https://getcomposer.org/) di komputer Anda.


### Melalui Git

- Clone repository dari GitHub:

`git clone https://github.com/riskimeji/Perpustakaan-SIP-Tes2.git`

- Masuk ke folder proyek:
`cd Perpustakaan-SIP-Tes2`
- Buat file .env
- Salin isi file .env.example ke dalam file .env:
- Konfigurasi database di file .env sesuai dengan pengaturan database Anda.
- example :
  
   ``DB_DATABASE=db_perpustakaan``
    ``DB_USERNAME=root``
    ``DB_PASSWORD=``
  
- Buat database dengan nama `db_perpustakaan`.
- Impor file `db_perpustakaan.sql` ke dalam `db_perpustakaan`.
- Install dependensi PHP menggunakan Composer:
  `composer install`
- Install dependensi Vite menggunakan NPM:
  `npm install vite`
- Jalankan perintah berikut untuk menghasilkan kunci aplikasi:
  `php artisan key:generate`
- Jalankan server lokal
  `php artisan serve`
  `npm run dev`

### Akun Demo
#### Staff
email: `staff@test.com`

password: `password`

#### Member/Visitor
email: `visitor@test.com`

password: `password`


 
