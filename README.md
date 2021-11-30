## Brocket Project

Made to complete studies, by :
- Abdul Fattah
- Dio Fajrie A
- Diaz Ilyasa
- Helmi Arrazy
- Muhammad Miftah Faridh


## Requirement

- Windows 10
- XAMPP for php 8 : https://www.apachefriends.org/index.html
- Composer : https://getcomposer.org/Composer-Setup.exe
- Code Editor

## How to run

- Make sure all the requirements have been met

- Open CMD/Terminal
```bash
git clone https://github.com/miftahfaridhh/vetracker.git
cd vetracker
composer install
```
- Copy .env.example file to .env on the root folder. Type like this if you using command prompt Windows
```bash
copy .env.example .env
```
or if using terminal, Ubuntu.
```bash
cp .env.example .env
```
- generate app key
```bash
php artisan key:generate
```

- open XAMPP without closing the CMD, klik start Click start on apache and MySQL

- open your localhost/phpmyadmin on your browser

- make a new database with the name 'laravel'

- open cmd/terminl again, type
```bash
php artisan migrate
```
- To run the laravel project
```bash
php artisan serve
```

## How To  Contrib

Berikut tutorial untuk melakukan pull request

1. Fork repository

2. Clone repository hasil fork

```bash
$ git clone [url]
```

3. Buat branch lokal baru

```bash
$ git branch [nama-branch]
```

4. Pindah ke branch yang dibuat

```bash
$ git checkout [nama-branch]
```

5. Membuat commit baru

```bash
$ git add .
$ git commit -m "pesan"
```

6. Push branch ke github

```bash
$ git push origin [nama-branch]
```
