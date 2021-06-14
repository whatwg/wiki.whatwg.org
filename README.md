# wiki.whatwg.org

This repository hosts the resources used to run <https://wiki.whatwg.org/>.

## Local testing

To test locally using [Docker](https://www.docker.com/), first edit `LocalSettings.php` so that `$wgServer` is `'http://localhost:8080'` instead of `'https://wiki.whatwg.org'`. Then, run the following command, with the appropriate values:

```sh
docker run --interactive --tty -p 8080:80 \
  -e MEDIAWIKI_DB_SERVER=??? \
  -e MEDIAWIKI_DB_NAME=??? \
  -e MEDIAWIKI_DB_USER=??? \
  -e MEDIAWIKI_DB_PASSWORD=??? \
  -e MEDIAWIKI_SECRET_KEY=??? \
  -e RECAPTCHA_SECRET_KEY=??? \
  whatwg-blog
```

You can then navigate to <http://localhost:8080/> in your web browser to see the wiki running against the specified database.
