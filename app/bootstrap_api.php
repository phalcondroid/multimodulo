<?php

use Phalcon\Di\FactoryDefault\Cli as FactoryDefault;
use Phalcon\Mvc\Micro;

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');

/**
 * The FactoryDefault Dependency Injector automatically registers the services that
 * provide a full stack framework. These default services can be overidden with custom ones.
 */
$di = new FactoryDefault();
$app = new Micro();

$app->get(
    "/say/welcome/{name}",
    function ($name) {
        echo "<h1>Welcome $name!</h1>";
    }
);

/**
 * Include general services
 */
include APP_PATH . '/config/services.php';

/**
 * Include cli environment specific services
 */
include APP_PATH . '/config/services_api.php';

/**
 * Include Autoloader
 */
include APP_PATH . '/config/loader.php';

/**
 * Get config service for use in inline setup below
 */
$config = $di->getConfig();

$app->handle();

/**
 * Register console modules
 */
$api->registerModules([
    'api' => ['className' => 'Multimodulo\Modules\Api\Module']
]);


} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    echo $e->getTraceAsString() . PHP_EOL;
    exit(255);
}
