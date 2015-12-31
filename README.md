Symfonian Indonesia Admin Skeleton
==================================

Ini adalah skeleton untuk [Symfonian Indonesia Admin Bundle](https://github.com/SymfonyId/AdminBundle)

###Cara Install####

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