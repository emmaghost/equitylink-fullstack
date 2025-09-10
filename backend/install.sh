#!/bin/bash
set -e

echo "Instalando dependencias..."
composer install --no-interaction --prefer-dist --optimize-autoloader

echo "Instalando Sanctum..."
composer require laravel/sanctum

echo "Instalando Spatie Roles & Permissions..."
composer require spatie/laravel-permission

echo "Publicando configs..."
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider" --force
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --force

echo "Migrando base de datos..."
php artisan migrate:fresh --seed

echo "Instalación completa. Usuarios demo:"
echo "   - admin@demo.com / password"
echo "   - user@demo.com / password"
