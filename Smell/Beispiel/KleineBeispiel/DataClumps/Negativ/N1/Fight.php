<?php

namespace KleineBeispiel\DataClumps\Negativ\N1;

use KleineBeispiel\DataClumps\Negativ\N1\NebenClassen\Hero;

class Fight
{


    /**Klasse ist zu spezifisch*/
    public function fightMadMage(Hero $hero)
    {
        /** Data Clumps, daten werden einzeln gehandhabte**/
         $enemyLevel = 1;
         $enemyHitPoints = 10;
         $enemyManaPoints = 15;
         $enemyName = "Halaster Blackcloak";
        do {
            $enemyManaPoints = $this->madMageAttack($enemyLevel,$enemyHitPoints,$enemyManaPoints, $enemyName, $hero);
            $enemyHitPoints = $this->madMageDefence($enemyLevel,$enemyHitPoints,$enemyManaPoints, $enemyName, $hero);
        } while ($enemyHitPoints > 0);
    }

    private function madMageAttack(int $enemyLevel, int $enemyHitPoints, int $enemyManaPoints, string $enemyName, Hero $hero): int
    {
        echo "$enemyName Greift An";
        $decision = rand(0, 1);
        if ($decision = 0 || $enemyManaPoints >= 3){
            echo "$enemyName greift mit Arcane Geschoss an";
            $enemyManaPoints -= 3;
            $hero->hitPoints -= 4 + $enemyLevel;
            return $enemyManaPoints;
        }
        if ($decision = 0 || $enemyManaPoints >= 2){
            echo "$enemyName greift mit Brennenden Händen an";
            $enemyManaPoints -= 2;
            $hero->hitPoints -= 2;
            return $enemyManaPoints;
        }
        echo "$enemyName muss sich erholen";
        return $enemyManaPoints += 1;
    }
    private function madMageDefence(int $enemyLevel, int $enemyHitPoints, int $enemyManaPoints, string $enemyName, Hero $hero): int
    {
        echo "Du Greift $enemyName an";

       return $enemyHitPoints -= rand(1, 10 + $hero->level);

    }

}