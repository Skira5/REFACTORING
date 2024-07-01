<?php

namespace src\Hero;

use KleineBeispiel\LargeClass\Negative\NebenClassen\Hero;
use NebenClassen\Fireball;

class HeroMage extends Hero
{
    public array $spells = [];

    public int $manaPointsMax = 20;

    public int $manaPoints = 20;


    public function __construct(string $name)
    {
        $spell = new Fireball();
        $this->name = $name;
        $this->spells = [$spell];

    }




}