<?php

namespace DogSimulator\Tests;

use DogSimulator\Dachshund;
use DogSimulator\Pug;
use DogSimulator\ShibaInu;
use DogSimulator\PlushLabrador;
use DogSimulator\SqueakyDachshund;
use PHPUnit\Framework\TestCase;

class DogTest extends TestCase
{
    public function testShibaInu()
    {
        $dog = new ShibaInu();
        $this->assertEquals("Woof! Woof!", $dog->sound());
        $this->assertEquals("DogSimulator\\ShibaInu is hunting!", $dog->hunt());
    }

    public function testPug()
    {
        $dog = new Pug();
        $this->assertEquals("Woof! Woof!", $dog->sound());
        $this->assertEquals("Pug is too lazy to hunt!", $dog->hunt());
    }

    public function testDachshund()
    {
        $dog = new Dachshund();
        $this->assertEquals("Woof! Woof!", $dog->sound());
        $this->assertEquals("Dachshund is hunting!", $dog->hunt());
    }

    public function testPlushLabrador()
    {
        $dog = new PlushLabrador();
        $this->assertEquals("This toy makes no sound.", $dog->sound());
        $this->assertEquals("PlushLabrador cannot hunt.", $dog->hunt());
    }

    public function testSqueakyDachshund()
    {
        $dog = new SqueakyDachshund();
        $this->assertEquals("Squeak! Squeak!", $dog->sound());
        $this->assertEquals("SqueakyDachshund cannot hunt.", $dog->hunt());
    }
}