<?php

namespace KleineBeispiel\LongMethod\Negative\NebenClassen;

use KleineBeispiel\LargeClass\Negative\NebenClassen\Hero;

class HeroWarrior extends Hero
{
public function __construct(string $name)
{
    $this->name = $name;
}
}