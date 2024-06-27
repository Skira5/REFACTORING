<?php

namespace KleineBeispiel\LargeClass\Negative\NebenClassen;

class HeroWarrior extends Hero
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}