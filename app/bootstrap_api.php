<?php

use Phalcon\Di\FactoryDefault as FactoryDefault;
use Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter;
use Phalcon\Mvc\Micro;
use Phalcon\Loader;
use Multimodulo\Modules\Common\Models\Arbitro;

define('BASE_API_PATH', dirname(__DIR__));
define('APP_API_PATH', BASE_API_PATH . '/app');

try {

    /**
     * The FactoryDefault Dependency Injector automatically registers the services that
     * provide a full stack framework. These default services can be overidden with custom ones.
     */
    $di = new FactoryDefault();
    $loader = new Loader();

    /**
     * Register Namespaces
     */
    $loader->registerNamespaces([
        'Multimodulo\Modules\Common\Models' => APP_API_PATH . '/common/models/'
    ]);
    $loader->register();

    /**
     * Include cli environment specific services
     */
    include APP_API_PATH . '/config/services_api.php';

    /**
     * Get config service for use in inline setup below
     */
    //$config = $di->getConfig();

    $app = new Micro();
    $app->get(
        "/api/arbitros",
        function () {
            $arbitros = Arbitro::find();
            $result   = array();
            foreach ($arbitros as $arbitro) {
                $result[] = array(
                    "id"      => $arbitro->id_arbitro,
                    "country" => $arbitro->Pais->pais,
                    "name"    => $arbitro->nombre,
                    "status"  => $arbitro->estado
                );
            }

            $this->response->setJsonContent(
                $result
            );
            return $this->response;
        }
    );
    $app->handle();

} catch (\Exception $e) {
    echo json_encode(array(
        "message" => $e->getMessage(),
        "trace"   => $e->getTraceAsString()
    ));
}
