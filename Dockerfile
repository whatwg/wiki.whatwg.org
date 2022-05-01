FROM mediawiki:1.36.4
COPY LocalSettings.php /var/www/html/LocalSettings.php
COPY entrypoint.sh /entrypoint.sh

# Enable security headers.
RUN set -eux; \
	a2enmod headers; \
	{ \
		echo '<Directory /var/www/html>'; \
		echo '  Header always set Strict-Transport-Security "max-age=63072000; includeSubDomains; preload"'; \
		echo '  Header always set X-Frame-Options "sameorigin"'; \
		echo '  Header setifempty X-Content-Type-Options "nosniff"'; \
		echo '</Directory>'; \
	} > "$APACHE_CONFDIR/conf-available/headers.conf"; \
	a2enconf headers

# Reduce the Server header to just "Apache" and remove the server signature on error pages.
RUN echo 'ServerTokens Prod\nServerSignature Off' >> "$APACHE_CONFDIR/conf-enabled/security.conf";

# Stop sending X-Powered-By.
RUN { \
		echo 'expose_php=Off'; \
	} > /usr/local/etc/php/conf.d/no-expose.ini

ENTRYPOINT ["/bin/bash"]
CMD ["/entrypoint.sh"]
