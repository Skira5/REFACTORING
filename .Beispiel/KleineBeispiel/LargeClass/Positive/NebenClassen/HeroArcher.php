<?php

namespace KleineBeispiel\LargeClass\Positive\NebenClassen;

use KleineBeispiel\LargeClass\Negative\NebenClassen\Hero;

class HeroArcher extends Hero
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}