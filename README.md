# Enpulsion 100in.space

## Tech Stack

This project is based on Laravel, also leveraging Filament, Alpine.js and Tailwind, to mention a few.
Runs fast and looks shiny.

## Requirements

1. [Install NVM](https://github.com/nvm-sh/nvm#installing-and-updating)

2. `nvm install node`

3. Install PHP 8.1

4. Install the `php8.1-sqlite3` PHP extension.

5. Copy `.env.example` to a file `.env`.

## SQLite File-Based Database

1. `touch database/database.sqlite`

2. In your `.env` file delete all the `DB_` variables and only set:
```
DB_DRIVER=sqlite
```

*Note: You can also choose MySQL, PostgreSQL or Microsoft SQL but technically possible doesn't mean smart :-)*

## Installation

1. Make sure you have set the database credentials (and other relevant data) in the `.env` file.

2. Initial Setup:
```
composer install
npm install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan shield:install --fresh
```

3. Build the assets:
```
npm install
npm run build
```

## Administration

### Managing Content

Visit `/admin` to access the administration panel that lets you manage content and users.

### Create another admin user:
```
php artisan make:filament-user
```

## Environment Variables

- `SUBSCRIBE_URL` - Where the subscribe link leads to. Leave empty to hide the button.
- `SITE_LIVE` - Controls the Live/Coming Soon mode.

## Development

### Working With Assets

Watch the assets for change and rebuild locally:
```
npm run dev
```
