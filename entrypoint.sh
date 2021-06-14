#!/bin/bash
set -euo pipefail

# Perform any database updates since the last deply.
# --quick means "skip the five-second countdown".
php /var/www/html/maintenance/update.php --quick

docker-php-entrypoint apache2-foreground
