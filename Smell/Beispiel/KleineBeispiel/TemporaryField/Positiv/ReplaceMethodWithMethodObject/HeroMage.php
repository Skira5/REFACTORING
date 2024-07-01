<?php

namespace KleineBeispiel\TemporaryField\Positiv\ReplaceMethodWithMethodObject;

use KleineBeispiel\TemporaryField\Positiv\ReplaceMethodWithMethodObject\NebenClassen\Fireball;
use KleineBeispiel\TemporaryField\Positiv\ReplaceMethodWithMethodObject\NebenClassen\Hero;

class HeroMage extends Hero
{
    public array $spells = [];
    public int $manaPointsMax = 20;

    public int $manaPoints = 20;

    public function __construct(string $name)
    {
        $fireball = new Fireball();
        $this->name = $name;
        $this->spells[] = $fireball;
    }
    public function castSpell(string $spellName): bool|int
    {
        //todo check ob das auch wirklich geht
        $spellCastingService = new SpellCastingService();
       return $spellCastingService->castSpell($this, $spellName);
    }

}