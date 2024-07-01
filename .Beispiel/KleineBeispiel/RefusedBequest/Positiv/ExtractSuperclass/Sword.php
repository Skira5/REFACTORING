<?php

namespace KleineBeispiel\RefusedBequest\Positiv\ExtractSuperclass;

class Sword extends Item
{
public function __construct(string $name, string $description, int $value, int $weight, int $damage)
{
    parent::__construct($name, $description, $value, $weight, $damage);
}
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