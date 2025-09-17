<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# Anime Club Dashboard

A PHP Laravel-based web application for managing personal anime lists. Users can register, log in, and manage their anime collection with full CRUD functionality. TailwindCSS is used for styling.

---

## Features

### Authentication
- User registration and login with hashed passwords.
- Restricted access to dashboard and CRUD operations for logged-in users only.
- Session management to keep users logged in securely.

### Anime Management (CRUD)
- **Create**: Add new anime to your list.
- **Read**: View all your anime in a table on the dashboard.
- **Update**: Edit anime details.
- **Delete**: Remove anime with confirmation prompts.

### Profile
- Edit and update your user profile.

### Frontend
- Clean and responsive UI built with TailwindCSS.
- Fun anime-inspired dashboard layout.

---

## Requirements

- PHP 8+
- Composer
- Laravel 10+
- MySQL / MariaDB
- Node.js & NPM (for TailwindCSS build, optional)

---

## Setup Instructions

1. **Clone the repository**
- git clone https://github.com/YOUR_USERNAME/anime-club-dashboard.git
- cd anime-club-dashboard
   
2. **Install PHP dependencies**
- composer install

3. **Install frontend dependencies**
- npm install
- npm run dev
   
4. **Set up environment file**
- cp .env.example .env

**Update .env with your database and app settings:**
- APP_NAME="Anime Club"
- APP_URL=http://localhost
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=anime_club
- DB_USERNAME=root
- DB_PASSWORD=
   
5. **Generate application key**
- php artisan key:generate


6. **Run database migrations**
- php artisan migrate

7. **Start the development server**
- php artisan serve

- Visit http://127.0.0.1:8000 in your browser.


## Author
Bryce Christian Madelo
   

>>>>>>> 6ab0c5a07f8aa8e85dc322265aaf7d8531a50c48
