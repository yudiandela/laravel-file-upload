# Laravel File Upload

[![Latest Stable Version](https://poser.pugx.org/yudiandela/laravel-file-upload/v/stable)](https://packagist.org/packages/yudiandela/laravel-file-upload)
[![Total Downloads](https://poser.pugx.org/yudiandela/laravel-file-upload/downloads)](https://packagist.org/packages/yudiandela/laravel-file-upload)
[![License](https://poser.pugx.org/yudiandela/laravel-file-upload/license)](https://packagist.org/packages/yudiandela/laravel-file-upload)

## Deskripsi

Laravel File Upload merupakan perubahan dari fileupload yang ada di repo ini [FileUpload](https://github.com/yudiandela/fileupload) karena ada beberapa bug sehingga tidak diteruskan project nya sampai selesai.

Beberapa Fungsi yang ada :

* Single Upload
* Multiple Upload
* Hanya support file Gambar (jpg, jpeg, png, gif, svg, bmp)

## Include Package

### Required

* [Laravel ^5.7.0](https://laravel.com/ "Laravel")
* [Intervention Image ^2.4](https://github.com/Intervention/image "Image Intervention")

### Developer

* [Laravel Debugbar ^3.2](https://github.com/barryvdh/laravel-debugbar "Laravel Debugbar")

### Plugins (JS, CSS)

* [Sweet Alert ^2.1.2](https://sweetalert.js.org/ "Sweet Alert")
* [Font Awesome ^5.5.0](https://fontawesome.com/ "Font Awesome")

## Persyaratan Server

* PHP >= 7.1.3
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* Ctype PHP Extension
* JSON PHP Extension

## Upload File dengan Ukuran Besar

* Setting di bagian php.ini

```shell
post_max_size = 0
```

## Langkah - Langkah Instalasi

* Gunakan composer

```shell
composer create-project yudiandela/laravel-file-upload
```

* Masuk ke directory project

```shell
cd laravel-file-upload
```

* Setting Konfigurasi database di file .env di bagian

```shell
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

* Impor migrasi ke database beserta data admin default dengan perintah

```shell
php artisan migrate --seed
```

* Jalankan server php dengan perintah

```shell
php artisan serve
```

* Buka aplikasi dengan

```shell
http://localhost:8000
```

* Login aplikasi

```shell
email   : admin@mail.com
password: 123456
```

## Preview

### Halaman Demo

Akan datang

## Author

* Facebook : [Yudi Andela](https://www.facebook.com/Ody12)

## Lisensi

Dibangun di bawah standart [MIT license](https://opensource.org/licenses/MIT).