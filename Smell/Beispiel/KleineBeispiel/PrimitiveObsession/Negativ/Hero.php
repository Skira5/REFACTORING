<?php

namespace KleineBeispiel\PrimitiveObsession\Negativ;

Abstract class Hero
{

    public string $name = '';
    public int $level = 0;
    /** Primitive Obsession */
    public int $hitPointsMax = 10;
    public int $hitPoints = 10;


    /** Primitive Obsession */
    public int $strength = 0;
    public int $dexterity = 0;
    public int $wisdom = 0;
    public int $intelligence = 0;
    public int $constitution = 0;
    public int $charisma = 0;


    /** Just dont do that, es können leicht fehler auftreten und das Debuggen wird erschwert */
    public array $attributes = [
        'Stärke' => 'strength',
        'Weisheit' => 'wisdom',
        'Intelligenz' => 'intelligence',
        'Geschicklichkeit' => 'dexterity',
        'Konstitution' => 'constitution',
        'Charisma' => 'charisma'
    ];
    public function setAttribute($field, $value): void
    {
        $this->{$this->attributes[$field]} = $value;
    }



}
