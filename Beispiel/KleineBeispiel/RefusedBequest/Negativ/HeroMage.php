<?php

namespace KleineBeispiel\RefusedBequest\Negativ;



use KleineBeispiel\RefusedBequest\Negativ\NebenClassen\Fireball;

class HeroMage extends Hero
{



public function __construct(string $name)
{
    $spell = new Fireball();
    $this->spells = [$spell];
    parent::__construct($name);
}

}