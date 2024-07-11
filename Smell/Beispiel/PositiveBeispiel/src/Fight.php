<?php

namespace PositiveBeispiel\src;

use KleineBeispiel\DataClumps\Positive\N1\Enemy;
use KleineBeispiel\DataClumps\Positive\N1\NebenClassen\Hero;

class Fight
{

    private const string NAME = "Halaster Blackcloak";

    public function fightMadMage(Hero $hero):void
    {

        $enemy = new Enemy(
            self::NAME,
            1,
            10,
            15
        );
            $this->madMageAttack($enemy, $hero);
    }


    /** Könnte man auch noch in die Enemy class aus lager*/
    private function madMageAttack(Enemy $enemy, Hero $hero): void
    {
        echo "$enemy->name Greift An";
        $decision = rand(0, 1);
        if ($decision = 0 || $enemy->manaPoints >= 3){
            echo "$enemy->name greift mit Arcane Geschoss an";
            $enemy->manaPoints -= 3;
            $hero->hitPoints -= 4 + $enemy->level;
        }
        if ($decision = 0 || $enemy->manaPoints >= 2){
            echo "$enemy->name greift mit Brennenden Händen an";
            $enemy->manaPoints -= 2;
            $hero->hitPoints -= 2;
        }
        echo "$enemy->name muss sich erholen";
    }
    private function madMageDefence(Enemy $enemy, Hero $hero): void
    {
        echo "Du Greift $enemy->name an";
       $enemy->hitPoints -= rand(1, 10 + $hero->level);

    }

}