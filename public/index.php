<?php
require_once '../src/Entity/test.php';
require_once '../src/Core/Autoloader.php';
use App\Entity\Test;

Autoloader::autoload();

$isaac = new Test('isaac');

echo $isaac->display();

