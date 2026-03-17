# VeTracker — Vehicle Management System

A web-based vehicle tracking and management platform that allows users to manage vehicle inventory, track ownership details, and maintain a comprehensive vehicle database with image support. Built as a university team project.

![Laravel](https://img.shields.io/badge/Laravel-8.x-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-7.3%2B-777BB4?logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-3.x-06B6D4?logo=tailwind-css&logoColor=white)
![Livewire](https://img.shields.io/badge/Livewire-2.x-FB70A9?logo=laravel&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)

---

## Features

- **Vehicle Inventory Management** — Full CRUD operations for vehicle records
- **Image Upload** — Upload and manage vehicle photos stored on the server
- **User Authentication** — Secure login/signup with email verification and two-factor authentication (2FA) via Laravel Jetstream
- **Team Management** — Multi-user team support with invitation system
- **Responsive UI** — Mobile-friendly interface built with Tailwind CSS and Alpine.js
- **Reactive Components** — Real-time UI updates using Laravel Livewire

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | Laravel 8.x, PHP 7.3+ |
| Frontend | Tailwind CSS 3, Alpine.js, Blade |
| Auth | Laravel Jetstream, Laravel Sanctum |
| Reactive | Laravel Livewire 2 |
| Database | MySQL |
| Build | Laravel Mix (Webpack) |

## Requirements

- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL

## Installation

### 1. Clone & Install Dependencies

```bash
git clone https://github.com/miftahfaridhh/vetracker.git
cd vetracker
composer install
npm install
```

### 2. Configure Environment

```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ve_tracker
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Run Migrations

```bash
php artisan migrate
```

### 4. Build Assets & Serve

```bash
npm run dev
php artisan serve
```

Open `http://localhost:8000` in your browser.

## Database Schema

| Table | Description |
|---|---|
| `users` | Registered users with Jetstream profile |
| `teams` | Team management (Jetstream) |
| `cars` | Vehicle records (owner, model, seats, transmission, vendor, location, price, image) |
| `sessions` | Database-driven session storage |

## Project Structure

```
app/
├── Http/Controllers/
│   ├── CarsController.php     # Vehicle CRUD logic
│   └── PagesController.php    # Static pages
├── Models/
│   ├── Cars.php               # Vehicle model
│   └── User.php               # User model
resources/views/
├── cars/                      # Vehicle management views
├── pages/                     # Landing, about, contact pages
└── layouts/                   # Shared layouts
```

## Team

This project was developed as a university assignment by:

- Abdul Fattah
- Dio Fajrie A
- Diaz Ilyasa
- Helmi Arrazy
- Muhammad Miftah Faridh

## License

This project is open-sourced under the [MIT License](LICENSE).
