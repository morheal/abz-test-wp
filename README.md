## WordPress Configuration

- The wp-config.php file is configured to use Redis for caching:

```sh
<?php
define('WP_REDIS_HOST', 'your-redis-endpoint');
define('WP_REDIS_PORT', 6379);
define('WP_REDIS_PASSWORD', 'your-redis-password'); // If your Redis instance requires a password
define('WP_REDIS_DATABASE', 0); // Optional, default is 0
define('WP_CACHE', true);
```

- Also configure Database credentials

```sh
<?php
define( 'DB_NAME', 'db_name' );
define( 'DB_USER', 'db_user' );
define( 'DB_PASSWORD', 'db_password' );
define( 'DB_HOST', '127.0.0.1' );
```