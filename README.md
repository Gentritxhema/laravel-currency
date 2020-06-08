# laravel-currency
Laravel currency table migration and seed

create_currencies_table.php -> Migration that creates "currencies" table with colums:code,name,symbol.
CurrencySeeder.php -> Seeder that adds a list of circulating currencies.

# Installation
* composer require gentritxhema/laravel-currency
* php artisan vendor:publish
* php artisan migrate
