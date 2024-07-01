<?php

namespace src\Hero;

use KleineBeispiel\LargeClass\Negative\NebenClassen\Hero;

class HeroArcher extends Hero
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}