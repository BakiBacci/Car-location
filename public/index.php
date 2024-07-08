<?php
require_once '../src/Entity/test.php';
require_once '../src/Core/Autoloader.php';
require_once '../src/Core/Router.php';

use App\Entity\Test;
use App\Core\Autoloader;
use App\Core\Router;


Autoloader::autoload();

$isaac = new Test('isaac');

echo $isaac->display();

$bacci = new Router();






