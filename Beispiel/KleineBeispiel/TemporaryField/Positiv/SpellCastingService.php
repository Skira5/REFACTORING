<?php

namespace KleineBeispiel\TemporaryField\Positiv;

use KleineBeispiel\TemporaryField\Positiv\NebenClassen\Spell;

class SpellCastingService
{
    private bool $isConcentrate = false;
    private ?Spell $selectedSpell = null;


    public function castSpell(HeroMage $heroMage,string $spellName): bool|int
    {
        if ($this->knowSpell($spellName)) {
            echo 'Dieser Zauber ist dir nicht bekannt';
            return false;
        }

        if ($this->isConcentrate) {
            echo 'du bist bereits mit was anderem beschäftigt';
            return false;
        }

        if ($heroMage->manaPoints >= $this->selectedSpell->manaCost) {
            $heroMage->manaPoints -= $this->selectedSpell->manaCost;
            echo "Der Zauber wurde erfolgreich gewirkt!\n";
            return $this->selectedSpell->damage;
        } else {
            echo "Not enough mana. XD\n";
            return false;
        }
    }

    private
    function knowSpell(
        $spellName
    ): bool {
        foreach ($this->spells as $spell) {
            if ($spell->name === $spellName) {
                $this->selectedSpell = $spell;
                return false;
            }
        }
        return true;
    }
}