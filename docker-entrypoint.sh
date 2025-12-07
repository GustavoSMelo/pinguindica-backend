#!/bin/bash
set -e

# Ensure the SQLite database file exists
if [ ! -f database/database.sqlite ]; then
    touch database/database.sqlite
    chmod 775 database/database.sqlite
    echo "Created SQLite database file."
fi

# Run migrations + seeders
echo "Running migrations + seeders..."
php artisan migrate --seed --force || true

exec "$@"
