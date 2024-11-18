<?php

namespace DogSimulator;

abstract class Dog {
    abstract public function sound(): string;

    public function hunt(): string {
        return get_class($this) . " is hunting!";
    }
}