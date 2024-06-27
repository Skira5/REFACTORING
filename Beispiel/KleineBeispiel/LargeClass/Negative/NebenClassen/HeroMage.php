<?php

namespace KleineBeispiel\LargeClass\Negative\NebenClassen;

use KleineBeispiel\LargeClass\Positive\NebenClassen\Fireball;

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