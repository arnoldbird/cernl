<?php
/*
 * Custom configuration.  Edit this file to override the core config.
 */

define('CERNL_THEME', '');

$my['database'] = [
  'adapter'     => 'Mysql',
  'host'        => 'localhost',
  'username'    => 'myusername',
  'password'    => 'mypassword',
  'dbname'      => 'mydatabase',
  'charset'     => 'utf8',
];

$my['changeme'] = [
  'mykey' => 'myvalue',
  'greetings' => 'hello developer',
];

$my_theme = BASE_PATH . '/my/themes/' . CERNL_THEME;
if (file_exists($my_theme . '/theme.php')) {
  $my['application']['viewsDir'] = $my_theme;
}
