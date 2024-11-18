<?php

namespace DogSimulator;

class Dachshund extends Dog {
    public function sound(): string {
        return "Woof! Woof!";
    }

    public function hunt(): string {
        return "Dachshund is hunting!";
    }
}