<?php
require_once '../src/Entity/test.php';


use App\Entity\Test;

$isaac = new Test('isaac');

echo $isaac->display();

