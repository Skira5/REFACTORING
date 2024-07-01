<?php

namespace KleineBeispiel\DifferentClasssesWithSimilarMethodes\Negativ;

class Goblin
{
    public string $name;
    public int $age;
    public int $bruteStrength;
    public int $hitPoints;
    public int $sneaky;

    public function __construct(string $name, int $age, int $bruteStrength, int $hitPoints)
    {
        $this->name = $name;
        $this->age = $age;
        $this->bruteStrength = $bruteStrength;
        $this->hitPoints = $hitPoints;

    }
    /** Verschieden Methoden*/
    public function attackWithKnife(): string
    {
        echo "attack";
        return ($this->bruteStrength + $this->sneaky) / 2;
    }
    /** Habe beide Klassen */
    public function defend(int $damage): void
    {
        $this->hitPoints -= $damage;
        echo 'Au';
    }

    /**Methoden sind sich sehr ähnlich aber nicht gleich**/
    public function WAAAGH()
    {
        $this->hitPoints += rand(1, 10);
        $this->bruteStrength += rand(1, 10);

        $this->sneaky -= rand(1, 10);

    }
}