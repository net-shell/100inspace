# Enpulsion 100in.space

## Stack

This project is based on Laravel, also leveraging Filament, Alpine.js and CSS3.

## Setup

1. Make sure you have set the database credentials (and other relevant data) in the `.env` file.

2. Initial Setup:
```
composer install

php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan shield:install
```

3. (Optional) Create admin user:
```
php artisan make:filament-user
```

4. Build the assets:
```
npm install
npm run build
```

5. Visit `/admin` to access the administration.
