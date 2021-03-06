<?php

$router = $di->get("router");

$router->add(
    '/',
    array(
        'namespace' => "Multimodulo\Modules\Frontend\Controllers",
        'module' => "frontend",
        'controller' => 'index',
        'action' => 'index'
    )
);

$router->add(
    '/getEquipos',
    array(
        'namespace' => "Multimodulo\Modules\Frontend\Controllers",
        'module' => "frontend",
        'controller' => 'index',
        'action' => 'getEquipos'
    )
);

$router->add(
    '/getPartidos',
    array(
        'namespace'  => "Multimodulo\Modules\Frontend\Controllers",
        'module'     => "frontend",
        'controller' => 'index',
        'action'     => 'getPartidos'
    )
);

$router->add(
    '/front/:controller/:action',
    array(
        'namespace' => "Multimodulo\Modules\Frontend\Controllers",
        'module' => "frontend",
        'controller' => 1,
        'action' => 2
    )
);

$router->add(
    '/role',
    array(
        'namespace' => "Multimodulo\Modules\Role\Controllers",
        'module' => "role",
        'controller' => "index",
        'action' => "index"
    )
);

$router->add(
    '/role/:controller/:action',
    array(
        'namespace' => "Multimodulo\Modules\Role\Controllers",
        'module' => "role",
        'controller' => 1,
        'action' => 2
    )
);

$router->add(
    '/role/:controller/:action/:params',
    array(
        'namespace' => "Multimodulo\Modules\Role\Controllers",
        'module' => "role",
        'controller' => 1,
        'action' => 2,
        'params'  => 3
    )
);

$router->add(
    '/role/:controller',
    array(
        'namespace' => "Multimodulo\Modules\Role\Controllers",
        'module' => "role",
        'controller' => 1,
        'action' => "index"
    )
);

$router->add(
    '/admin',
    array(
        'namespace' => "Multimodulo\Modules\Admin\Controllers",
        'module' => "admin",
        'controller' => "index",
        'action' => "index"
    )
);

$router->add(
    '/admin/:controller/:action',
    array(
        'namespace' => "Multimodulo\Modules\Admin\Controllers",
        'module' => "admin",
        'controller' => 1,
        'action' => 2
    )
);

$router->add(
    '/admin/:controller/:action/:params',
    array(
        'namespace' => "Multimodulo\Modules\Admin\Controllers",
        'module' => "admin",
        'controller' => 1,
        'action' => 2,
        'params'  => 3
    )
);

$router->add(
    '/admin/:controller',
    array(
        'namespace' => "Multimodulo\Modules\Admin\Controllers",
        'module' => "admin",
        'controller' => 1,
        'action' => "index"
    )
);

/*
foreach ($application->getModules() as $key => $module) {

    //$namespace = str_replace('\Modules', "", $module["className"]);
    $namespace = $module["className"];
    $nameArray = explode("\\", $namespace);
    $nameArray[count($nameArray) - 1] = "Controllers";
    $namespace = implode("\\", $nameArray);

    $router->add('/'.$key.'/:params', [
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 'index',
        'action' => 'index',
        'params' => 1
    ])->setName($key);
    $router->add('/'.$key.'/:controller/:params', [
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 1,
        'action' => 'index',
        'params' => 2
    ]);
    $router->add('/'.$key.'/:controller/:action/:params', [
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 1,
        'action' => 2,
        'params' => 3
    ]);
}
*/

$di->set("router", $router);
