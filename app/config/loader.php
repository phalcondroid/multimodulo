<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Multimodulo\Models' => APP_PATH . '/common/models/',
    'Multimodulo'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Multimodulo\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'Multimodulo\Modules\Admin\Module'    => APP_PATH . '/modules/admin/Module.php',
    'Multimodulo\Modules\Role\Module'     => APP_PATH . '/modules/role/Module.php',
    'Multimodulo\Modules\Api\Module'      => APP_PATH . '/modules/api/Module.php'
]);

$loader->register();
