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
php artisan shield:install --force
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

## Environment Variables

- `SUBSCRIBE_URL` - Where the subscribe link leads to.

## Development

### Use SQLite File-based Database

1. `touch database/database.sqlite`

2. In your .env file delete all the `DB_` variables and only set:
```
DB_DRIVER=sqlite
```

3. Run `php artisan migrate` and `php artisan db:seed`.

### Working With Assets

Watch the assets for change and rebuild locally:
```
npm run dev
```

Make sure your .env vars are right.