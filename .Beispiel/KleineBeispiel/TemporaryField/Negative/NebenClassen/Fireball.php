<?php

namespace KleineBeispiel\TemporaryField\Positiv\NebenClassen;



use KleineBeispiel\TemporaryField\Positiv\ReplaceMethodWithMethodObject\NebenClassen\Spell;

class Fireball extends Spell
{
    public function __construct()
    {
        $this->name = 'fireball';
        $this->damage = 1;
        $this->spellLevel = 1;
        $this->manaCost = 2;
    }
}