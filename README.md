# test-router

This is tiny web-application to testing simple route functionality.

To run please follow:

1. Clone this repository

2. In parent project folder `test-project` install composer dependencies

  ```
  composer install
  ```

3. Go to `test-project/web/public`

4. Start the PHP Built-in web server

  ```
  php -S localhost:8800 routing.php
  ```

5. Visit the following links:

  [http://localhost:8800/](http://localhost:8800/)<br />
  [http://localhost:8800/hello](http://localhost:8800/hello)<br />
  [http://localhost:8800/hello/say](http://localhost:8800/hello/say)<br />
  [http://localhost:8800/hello/say/anonymous](http://localhost:8800/hello/say/anonimus)<br />
  [http://localhost:8800/users:edit/12](http://localhost:8800/users:edit/12)<br />
  [http://localhost:8800/orders_stats.info.1](http://localhost:8800/orders_stats.info.1)<br />
  [http://localhost:8800/orders_stats.info.2](http://localhost:8800/orders_stats.info.2)<br />