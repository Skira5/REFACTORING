<?php

namespace KleineBeispiel\DifferentClasssesWithSimilarMethodes\Positiv;

class Orc extends Greenskin
{

    public function __construct(string $name, int $age, int $bruteStrength, int $hitPoints)
    {
        parent::__construct($name, $age, $bruteStrength, $hitPoints);
    }

    public function attackWithAxt(): string
    {
        return 5;
    }


}