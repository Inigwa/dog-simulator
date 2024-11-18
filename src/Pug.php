<?php

namespace DogSimulator;

class Pug extends Dog {
    public function sound(): string {
        return "Woof! Woof!";
    }

    public function hunt(): string {
        return "Pug is too lazy to hunt!";
    }
}
