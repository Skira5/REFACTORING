<?php

namespace KleineBeispiel\DifferentClasssesWithSimilarMethodes\Positiv\ExtractSuperclass;

class Greenskin
{
    public string $name;
    public int $age;
    public int $bruteStrength;
    public int $hitPoints;

    public function __construct(string $name, int $age, int $bruteStrength, int $hitPoints)
    {
        $this->name = $name;
        $this->age = $age;
        $this->bruteStrength = $bruteStrength;
        $this->hitPoints = $hitPoints;

    }
    /** Gleiche Klassen werden in die abstract ausgelagert */
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

    }
}