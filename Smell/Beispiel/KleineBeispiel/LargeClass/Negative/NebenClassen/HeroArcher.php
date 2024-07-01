<?php

namespace KleineBeispiel\LargeClass\Negative\NebenClassen;

class HeroArcher extends Hero
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}