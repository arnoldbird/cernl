<?php
/*
 * DO NOT EDIT THIS FILE.  Create your custom config in BASE_PATH/my/config.php.
 */

return new \Phalcon\Config([
    'database' => [
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => '',
        'password'    => '',
        'dbname'      => '',
        'charset'     => 'utf8',
    ],
    'application' => [
        'appDir'         => APP_PATH . '/',
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir'      => APP_PATH . '/models/',
        'viewsDir'       => APP_PATH . '/themes/starter',
        'cacheDir'       => BASE_PATH . '/public/my/cache/',

        // This allows the baseUri to be understand project paths that are not in the root directory
        // of the webpspace.  This will break if the public/index.php entry point is moved or
        // possibly if the web server rewrite rules are changed. This can also be set to a static path.
        'baseUri'        => preg_replace('/public([\/\\\\])index.php$/', '', $_SERVER["PHP_SELF"]),
    ]
]);
