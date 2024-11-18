<?php

require __DIR__ . '/vendor/autoload.php';

use DogSimulator\ShibaInu;
use DogSimulator\Pug;
use DogSimulator\Dachshund;
use DogSimulator\PlushLabrador;
use DogSimulator\SqueakyDachshund;

$args = $argv;

if (count($args) < 3) {
    echo "Usage: php console.php <dog_type> <command>\n";
    exit(1);
}

$dogType = ucfirst($args[1]);
$command = $args[2];

$className = "DogSimulator\\{$dogType}";

if (!class_exists($className)) {
    echo "Error: Dog type '{$dogType}' not found.\n";
    exit(1);
}

$dog = new $className();

switch ($command) {
    case 'sound':
        echo $dog->sound() . PHP_EOL;
        break;
    case 'hunt':
        echo $dog->hunt() . PHP_EOL;
        break;
    default:
        echo "Error: Command '{$command}' not recognized.\n";
        exit(1);
}