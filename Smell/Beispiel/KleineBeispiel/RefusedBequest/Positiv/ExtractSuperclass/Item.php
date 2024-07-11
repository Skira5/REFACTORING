<?php

namespace KleineBeispiel\RefusedBequest\Positiv\ExtractSuperclass;


/**
 *Extract Superclass: Wenn Klassen ähnliche Fields und Methoden haben, wird eine gemeinsame Oberklasse erstellt,
 * in welche alle identischen Fields und Methoden verschoben werden.
 * -> weniger doppelter Code
 */
class Item
{

    /** von allen benötigt Methoden, Attribute */
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
}