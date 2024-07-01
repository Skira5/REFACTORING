<?php

namespace KleineBeispiel\DifferentClasssesWithSimilarMethodes\Positiv\ExtractSuperclass;

class Goblin extends Greenskin
{

    public int $sneaky;

public function __construct(string $name, int $age, int $bruteStrength, int $hitPoints, int $sneaky)
{
    $this->sneaky = $sneaky;
    parent::__construct($name, $age, $bruteStrength, $hitPoints);
}

    /** Verschieden Methoden*/
    public function attackWithKnife(): string
    {
        echo "attack";
        return ($this->bruteStrength + $this->sneaky) / 2;
    }


    /**
     * Für Goblin angepasste Methode
     * @return void
     */
    public function WAAAGH(): void
    {
        parent::WAAAGH();
        $this->sneaky -= rand(1, 10);

    }
}