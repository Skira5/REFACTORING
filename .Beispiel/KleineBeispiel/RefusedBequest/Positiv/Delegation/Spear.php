<?php

namespace KleineBeispiel\RefusedBequest\Positiv\Delegation;



class Spear
{
    private Item $item;
public function __construct(string $name, string $description, int $value, int $weight, int $damage)
{
    $this->item = new Item( $name,  $description,  $value,  $weight,  $damage);

}
    public function stingWithSpearAgainstFootman(): int
    {
        return $this->item->damage;
    }
    public function stingWithSpearAgainstMountedSoldier(): int
    {
        return $this->item->damage * 2;
    }
    public function stingWithSpearAgainstArmouredSoldier(): int
    {
        return $this->item->damage / 4;
    }

}