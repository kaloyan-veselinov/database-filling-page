<?php
define("LANGCODE", substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
require_once dirname(__FILE__).'/Controller/Router.php';
$router = new Router();
$router->routeRequest();
