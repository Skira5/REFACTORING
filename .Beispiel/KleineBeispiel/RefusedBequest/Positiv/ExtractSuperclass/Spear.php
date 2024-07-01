<?php

namespace KleineBeispiel\RefusedBequest\Positiv\ExtractSuperclass;

class Spear extends Item
{
public function __construct(string $name, string $description, int $value, int $weight, int $damage)
{
    parent::__construct($name, $description, $value, $weight, $damage);
}
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