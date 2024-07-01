<?php

namespace KleineBeispiel\LongMethod\Positve\ExtractMethode\NebenClassen;


class HeroMage extends Hero
{
    public array $spells = [];

    public int $manaPointsMax = 20;

    public int $manaPoints = 20;


    public function __construct(string $name)
    {
        $this->name = $name;

    }

}