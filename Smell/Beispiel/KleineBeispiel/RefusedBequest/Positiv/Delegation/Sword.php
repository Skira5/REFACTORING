<?php

namespace KleineBeispiel\RefusedBequest\Positiv\Delegation;


class Sword
{
    private Item $item;

    public function __construct(string $name, string $description, int $value, int $weight, int $damage)
    {
        $this->item = new Item($name, $description, $value, $weight, $damage);
    }

    public function strikeWithSwordAgainstFootman(): int
    {
        return $this->item->damage * 3;
    }
    public function strikeWithSwordAgainstMountedSoldier(): int
    {
        return $this->item->damage / 2;
    }

    public function strikeWithSwordAgainstArmouredSoldier(): int
    {
        return $this->item->damage;
    }
}