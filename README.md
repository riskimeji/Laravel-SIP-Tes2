# Proyek Perpustakaan dengan Laravel 10 dan Tailwind CSS

Repository ini merupakan bagian dari proyek perpustakaan yang dibangun menggunakan Laravel 10 dan Tailwind CSS. Proyek ini memiliki dua peran utama: "Staff" dan "Member", masing-masing dengan kemampuan yang berbeda sesuai perannya.

## Deskripsi Proyek

Proyek ini bertujuan untuk membuat sistem perpustakaan yang ramah pengguna (user-friendly) dan responsif. Saya menggunakan Laravel 10 sebagai kerangka kerja utama dan Tailwind CSS untuk mempercantik tampilan sistem. Formulir login dan berbagai halaman lainnya dirancang untuk memberikan pengalaman pengguna yang nyaman dan responsif, sehingga dapat diakses dengan baik di berbagai perangkat dan lebar layar.

## Langkah-langkah Instalasi

Berikut adalah langkah-langkah untuk menginstal proyek Perpustakaan dengan Laravel 10 dan Tailwind CSS:

### Prasyarat

Pastikan Anda telah menginstal [Composer](https://getcomposer.org/) di komputer Anda.

### Melalui Git

- Clone repository dari GitHub:

git clone https://github.com/riskimeji/Perpustakaan-SIP-Tes2.git

- Masuk ke folder proyek:
cd Perpustakaan-SIP-Tes2
- Salin isi file .env.example ke dalam file .env:
cp .env.example .env
- Konfigurasi database di file .env sesuai dengan pengaturan database Anda.
- Buat database dengan nama db_perpustakaan.
- Impor file db_perpustakaan.sql ke dalam database yang telah Anda buat.
- Jalankan perintah berikut untuk menghasilkan kunci aplikasi:
  php artisan key:generate
- Install dependensi PHP menggunakan Composer:
  composer install
- Jalankan server lokal
  php artisan serve


 
