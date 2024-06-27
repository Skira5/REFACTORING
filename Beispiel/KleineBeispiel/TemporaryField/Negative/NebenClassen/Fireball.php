<?php

namespace KleineBeispiel\TemporaryField\Positiv\NebenClassen;



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