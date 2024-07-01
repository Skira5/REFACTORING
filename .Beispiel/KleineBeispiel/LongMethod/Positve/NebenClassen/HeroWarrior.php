<?php

namespace KleineBeispiel\LongMethod\Positve\NebenClassen;



use KleineBeispiel\LongMethod\Positve\ExtractMethode\NebenClassen\Hero;

class HeroWarrior extends Hero
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}