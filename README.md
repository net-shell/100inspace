# Enpulsion 100in.space

## Stack

This project is based on Laravel, also leveraging Filament, Alpine.js and CSS3.

## Setup

1. Make sure you have set the database credentials (and other relevant data) in the `.env` file.

2. Run these commands:
```
composer install

php artisan migrate
php artisan db:seed

npm install
npm run build
```

3. (Optional) Create admin user:
```
php artisan make:filament-user
```

4. Visit `/admin` to access the administration.
