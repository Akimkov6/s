<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php";

use \FastRoute\RouteCollector as RouteCollector;

$dispatcher = \FastRoute\simpleDispatcher(function (RouteCollector $r) {
    $r->addGroup('/api/v1', function (RouteCollector $r) {
        return \App\Router::route($r);
    });
});

require_once 'dispatch.php';
