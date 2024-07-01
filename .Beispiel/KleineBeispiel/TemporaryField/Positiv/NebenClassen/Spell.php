<?php

namespace KleineBeispiel\TemporaryField\Positiv\NebenClassen;

Abstract class Spell
{
    public int $spellLevel = 0;
    public string $name = '';
    public int $manaCost = 0;
    public int $damage = 0;
    public bool $spellSuccessful = false;

}