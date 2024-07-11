<?php

namespace KleineBeispiel\RefusedBequest\Positiv\Delegation;


class Spear
{
    /**
     *Replace Inheritance with Delegation: Wenn eine Unterklasse nur einen Bruchteil der Methoden der Oberklasse nutzt,
     * wird ein Field mit einem Objekt der Oberklasse in die Unterklasse eingefügt.
     * Unterklassen-Methoden werden verändert, sodass sie das Objekt stattdessen nutzen.
     * Dann wird die Deklarierung der Vererbung entfernt.
     * -> keine unnötigen vererbten Methoden
     */
    private Item $item;

    public function __construct(string $name, string $description, int $value, int $weight, int $damage)
    {
        $this->item = new Item($name, $description, $value, $weight, $damage);
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