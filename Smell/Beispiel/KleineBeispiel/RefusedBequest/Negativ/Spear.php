<?php

namespace KleineBeispiel\RefusedBequest\Negativ;

class Spear
{
    /** Werden auch in Sword gebraucht */
    public string $name;
    public string $description;
    public int $value;
    public int $weight;
    public int $damage;

    public function __construct(string $name, string $description, int $value, int $weight, int $damage)
    {
        $this->name = $name;
        $this->description = $description;
        $this->value = $value;
        $this->weight = $weight;
        $this->damage = $damage;
    }
    /**werden Nur in Spear Gebraucht*/
    public function stingWithSpearAgainstFootman(): int
    {
       return $this->damage;
    }
    public function stingWithSpearAgainstMountedSoldier(): int
    {
        return $this->damage * 2;
    }
    public function stingWithSpearAgainstArmouredSoldier(): int
    {
        return $this->damage / 4;
    }

}