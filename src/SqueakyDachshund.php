<?php

namespace DogSimulator;

class SqueakyDachshund extends Dog {
    public function sound(): string {
        return "Squeak! Squeak!";
    }

    public function hunt(): string {
        return "SqueakyDachshund cannot hunt.";
    }
}