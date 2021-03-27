<?php

require_once(__DIR__ . '/models/Dog.php');

$dog = new Dog('AA');
echo $dog->getName();

?>