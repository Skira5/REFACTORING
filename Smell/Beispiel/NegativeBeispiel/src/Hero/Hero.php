<?php


Abstract class Hero
{


    public string $name = '';
    public int $level = 0;
    public int $hitPointsMax = 10;
    public int $hitPoints = 10;
    public int $strength = 0;
    public int $dexterity = 0;
    public int $wisdom = 0;
    public int $intelligence = 0;
    public int $constitution = 0;
    public int $charisma = 0;
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

    public function fight(): int
    {
        return $this->strength * 3;
    }


}
