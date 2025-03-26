#!/bin/sh

# Set permissions for storage and cache
chmod -R 775 storage bootstrap/cache

# Serve Laravel from the public directory
php -S 0.0.0.0:3000 -t public
