<?php
define('ROOT', str_replace("index.php", "", $_SERVER["SCRIPT_FILENAME"]));

require(ROOT . 'core/db.php');
require(ROOT . 'core/model.php');
require(ROOT . 'core/controller.php');

require('router.php');
$router = new Router();
$router->getRequest();
