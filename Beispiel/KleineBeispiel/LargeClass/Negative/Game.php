<?php

namespace KleineBeispiel\LargeClass\Negative;

use KleineBeispiel\LargeClass\Negative\NebenClassen\Hero;
use KleineBeispiel\LargeClass\Negative\NebenClassen\HeroArcher;
use KleineBeispiel\LargeClass\Negative\NebenClassen\HeroMage;
use KleineBeispiel\LargeClass\Negative\NebenClassen\HeroWarrior;

class Game
{
    public function start()
    {
        $hero = $this->CreatHero();

    }
    public function CreatHero()
    {
        echo "Willkommen \n";

        do{
            echo "Bitte nenne Sie ihren Namen";
            $heroName = trim(fgets(STDIN));
        } while (empty($heroName));

        echo "Wähle deine Klasse \n
            1. Mage    
            2. Warrior
            3. HeroArcher
            ";
        $heroClass = trim(fgets(STDIN));
        /** Mehre If Bedingungen statt zbs einem Switch */
        if ($heroClass === 'Mage' || $heroClass === '1' ){
            $hero = new HeroMage($heroName);
        }
        if ($heroClass === 'Warrior' || $heroClass === '2' ){
            $hero = new HeroWarrior($heroName);
        }
        if ($heroClass === 'HeroArcher' || $heroClass === '3' ){
            $hero = new HeroArcher($heroName);
        }
        $attributes = ['Stärke', 'Weisheit', 'Intelligenz', 'Geschicklichkeit', 'Konstitution', 'Charisma'];
        $points = 20;

        echo "Du hast $points Punkte zum Verteilen auf die folgenden Attribute: \n";
        foreach ($attributes as $attribute) {
            echo "$attribute ";
        }
        echo "\n";

        while ($points > 0) {
            // Verschachtelte Schleifen
            foreach ($attributes as $attribute) {
                echo "Verteile Punkte auf $attribute (Verbleibende Punkte: $points): ";
                $input = trim(fgets(STDIN));
                if (is_numeric($input) && $input <= $points && $input >= 0) {
                    if ($attribute === 'Stärke') {
                        $hero->setAttribute('Strength', $input);
                    } elseif ($attribute === 'Weisheit') {
                        $hero->setAttribute('Wisdom', $input);
                    } elseif ($attribute === 'Intelligenz') {
                        $hero->setAttribute('Intelligence', $input);
                    } elseif ($attribute === 'Geschicklichkeit') {
                        $hero->setAttribute('Dexterity', $input);
                    } elseif ($attribute === 'Konstitution') {
                        $hero->setAttribute('Constitution', $input);
                    } elseif ($attribute === 'Charisma') {
                        $hero->setAttribute('Charisma', $input);
                    }
                    $points -= $input;
                } else {
                    echo "Ungültige Eingabe :( . Versuche es erneut.\n";
                }
            }
        }

        echo "Alle Punkte wurden verteilt!\n";
        return $hero;
    }
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