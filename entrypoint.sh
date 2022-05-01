#!/bin/bash
set -euo pipefail

cat >> /etc/ssmtp/ssmtp.conf <<-EOCFG
# Fastmail setup
mailhub=smtp.fastmail.com:465
AuthUser=${FASTMAIL_USERNAME}
AuthPass=${FASTMAIL_PASSWORD}
AUthMetod=PLAIN
UseTLS=YES
UseSTARTTLS=NO
FromLineOverride=YES
EOCFG

# Perform any database updates since the last deply.
# --quick means "skip the five-second countdown".
php /var/www/html/maintenance/update.php --quick &

docker-php-entrypoint apache2-foreground
