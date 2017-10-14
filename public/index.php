<?php
require_once dirname(__FILE__).'/Controller/Router.php';
$router = new Router();
$router->routeRequest();
