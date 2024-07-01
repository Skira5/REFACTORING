<?php

namespace KleineBeispiel\TemporaryField\Negative;


use KleineBeispiel\TemporaryField\Positiv\ReplaceMethodWithMethodObject\NebenClassen\Fireball;
use KleineBeispiel\TemporaryField\Positiv\ReplaceMethodWithMethodObject\NebenClassen\Hero;
use KleineBeispiel\TemporaryField\Positiv\ReplaceMethodWithMethodObject\NebenClassen\Spell;

class HeroMage extends Hero
{
    public array $spells = [];
    public int $manaPointsMax = 20;

    public int $manaPoints = 20;



    /** Temporary Field **/
    public bool $isConcentrate = false;
    public ?Spell $selectedSpell = null;
    public function __construct(string $name)
    {
        $fireball = new Fireball();
        $this->name = $name;
        $this->spells[] = $fireball;

    }
    public function castSpell(string $spellName): bool|int
    {
        if ($this->isConcentrate){
         echo 'du bist bereits mit was anderem beschäftigt';
            return false;
        }
        if ($this->knowSpell($spellName)){
            echo 'Dieser Zauber ist dir nicht bekannt';
            return false;
        }
        if ($this->manaPoints >= $this->selectedSpell->manaCost) {
            $this->manaPoints -= $this->selectedSpell->manaCost;
            echo "Der Zauber wurde erfolgreich gewirkt!\n";
            return $this->selectedSpell->damage;
        } else {
            echo "Not enough mana. XD\n";
            return false;
        }
    }
    private function knowSpell($spellName): bool
    {
        foreach ($this->spells as $spell){
            if ($spell->name === $spellName){
                $this->selectedSpell = $spell;
                return false;
            }
        }
        return true;
    }


}