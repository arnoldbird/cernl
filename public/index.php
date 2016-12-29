<?php
use Phalcon\Di\FactoryDefault;

error_reporting(E_ALL);

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/core');

try {

    /**
     * The FactoryDefault Dependency Injector automatically registers
     * the services that provide a full stack framework.
     */
    $di = new FactoryDefault();

    /**
     * Read services
     */
    include APP_PATH . "/config/services.php";

    /**
     * Get config service for use in inline setup below
     */
    
    // Core configuration.
    $config = $di->getConfig();
    
    // Custom configuration.
    $my_config = $config['application']['myConfigDir'];
    
    if (file_exists($my_config)) {
      include $my_config;
      $custom = new \Phalcon\Config($my);
      $config->merge($custom);
    }
    else {
      $flash = new Phalcon\Flash\Direct();
      $msg = _('Looks like you need to copy config.php.example to config.php.');
      $msg .= ' ' . _('See the README.txt in the base directory.');
      $flash->notice($msg);
    }

    /**
     * Include Autoloader
     */
    include APP_PATH . '/config/loader.php';

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
