# blog
This is a Laravel project for managing posts. It allows users to create, view, update, and delete posts.

## Prerequisites

Before running the project, ensure you have the following installed on your local machine:

- [PHP](https://www.php.net/) (recommended version: 7.4+)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (recommended LTS version)
- [npm](https://www.npmjs.com/) or [Yarn](https://yarnpkg.com/) (for managing frontend dependencies)
- [MySQL](https://www.mysql.com/)

## Installation

1. Clone the repository:

2. cd into the app

```cd blog``` 

3. Install composer dependencies

```composer install```

4. Copy or rename .env.example to .env and update the database according to your environment
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

5. generate an APP_KEY in your .env file

```php artisan key:generate```

6. Run migrations to create tables

```php artisan migrate```

7. Seed database with sample data (optional)

```php artisan db:seed```

8. Install frontend dependencies (necessary for tailwind)

```npm install```
 or 
 ```yarn install```

## Usage

run the laravel app:
```
php artisan serve
```

you also need to run dev to enable tailwind styling on the app:
```
npm run dev
```

