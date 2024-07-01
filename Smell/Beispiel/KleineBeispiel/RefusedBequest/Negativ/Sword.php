<?php

namespace KleineBeispiel\RefusedBequest\Negativ;

class Sword extends Spear
{
    public function __construct(string $name, string $description, int $value, int $weight, int $damage)
    {
        parent::__construct($name, $description, $value, $weight, $damage);
    }

    /**ander Methoden zum Angriff mit dem Schwert, spear angriffe werden nicht mehr genutzt */
    public function strikeWithSwordAgainstFootman(): int
    {
        return $this->damage * 3;
    }

    public function strikeWithSwordAgainstMountedSoldier(): int
    {
        return $this->damage / 2;
    }

    public function strikeWithSwordAgainstArmouredSoldier(): int
    {
        return $this->damage;
    }
}