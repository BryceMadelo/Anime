# Anime Club Dashboard

A PHP Laravel-based web application for managing personal anime lists. Users can register, log in, and manage their anime collection with full CRUD functionality. TailwindCSS is used for styling.

---

## Features

### Authentication
- User registration and login with hashed passwords.
- Restricted access to dashboard and CRUD operations for logged-in users only.
- Session management to keep users logged in securely.

### Anime Management (CRUD)
- **Create**: Add new anime/webtoon to your list.
- **Read**: View all your anime/webtoon in a table on the dashboard.
- **Update**: Edit anime/webtoon details.
- **Delete**: Remove anime/webtoon with confirmation prompts.

### Profile
- Edit and update your user profile.

### Frontend
- Clean and responsive UI built with TailwindCSS.

---

## Requirements

- PHP 8+
- Composer
- Laravel 10+
- MySQL
- Node.js & NPM (for TailwindCSS build)

---

## Setup Instructions

1. **Clone the repository**
- git clone https://github.com/BryceMadelo/Anime.git
- cd your-repo
   
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
