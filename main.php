<?php

namespace Structural\FluentInterface;

require_once "vendor/autoload.php";

$object = new FluentInterface();
$object->setFirstValue(123)->setSecondValue(456)->setThirdValue(789);

printf("%s\n", $object->aggregate());
