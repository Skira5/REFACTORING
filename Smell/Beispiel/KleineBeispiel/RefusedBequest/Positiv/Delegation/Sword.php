<?php

namespace KleineBeispiel\RefusedBequest\Positiv\Delegation;



class Sword
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