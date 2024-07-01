<?php

namespace KleineBeispiel\RefusedBequest\Positiv\Delegation;

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