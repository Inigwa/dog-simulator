<?php

namespace DogSimulator;

class PlushLabrador extends Dog {
    public function sound(): string {
        return "This toy makes no sound.";
    }

    public function hunt(): string {
        return "PlushLabrador cannot hunt.";
    }
}