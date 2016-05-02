Symfonian Indonesia Admin Skeleton
==================================

[![Build Status](https://travis-ci.org/SymfonyId/Skeleton.svg?branch=master)](https://travis-ci.org/SymfonyId/Skeleton)

Ini adalah skeleton untuk [Symfonian Indonesia Admin Bundle](https://github.com/SymfonyId/AdminBundle)

###Pre Requirement

- [Redis Server](http://redis.io/) untuk menyimpan session
- [NodeJS](https://nodejs.org/)


###Cara Install

```lang=shell
git clone git@github.com:SymfonyId/Skeleton.git
```

Buat **database** sesuai kebutuhan(hanya database tanpa table apapun). Kemudian jalankan perintah berikut dari root project, jalankan composer install

```lang=shell
composer update --prefer-dist
```

Setelah semuanya terinstall jalankan

```lang=shell
php bin/console siab:skeleton:setup
```

Kemudian Anda dapat menjalankan web server dengan perintah

```lang=shell
php bin/console server:run
```

Buka browser

```lang=shell
localhost:8000/admin
```


###Uglify JS & CSS (optional)

Jika ingin menggunakan uglifyJs dan UglifyCss, anda bisa melakukan instalasi sesuai dengan dokumentasi resmi [Symfony](http://symfony.com/doc/current/cookbook/assetic/uglifyjs.html)

Setting dan ubah bagian berikut sesuai dengan instalasi Anda:

```lang=yml
assetic:
    bundles: ['AppBundle', 'SymfonianIndonesiaAdminBundle', 'FOSUserBundle']
    node: /usr/bin/nodejs #change to your node path
    filters:
        cssrewrite: ~
        uglifyjs2:
            bin: /usr/local/bin/uglifyjs #change to your uglifyjs path
        uglifycss:
            bin: /usr/local/bin/uglifycss #change to your uglifycss path
```