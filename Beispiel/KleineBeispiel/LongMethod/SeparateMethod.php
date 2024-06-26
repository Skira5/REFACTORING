<?php

namespace KleineBeispiel\LongMethod;

use src\Hero\Hero;
use src\Hero\HeroArcher;
use src\Hero\HeroMage;
use src\Hero\HeroWarrior;
class SeparateMethod
{
    public function createHero()
    {
        echo "Willkommen \n";

        $heroName = $this->promptForHeroName();
        $hero = $this->createHeroByClass($heroName);

        $this->assignAttributes($hero);
        return $hero;
    }

    private function promptForHeroName(): string
    {
        do {
            echo "Bitte nenne Sie ihren Namen: ";
            $heroName = trim(fgets(STDIN));
        } while (empty($heroName));

        return $heroName;
    }

    private function createHeroByClass($heroName): Hero
    {
        echo "Wähle deine Klasse \n
            1. Mage    
            2. Warrior
            3. Archer
        ";
        $heroClass = trim(fgets(STDIN));

        switch ($heroClass) {
            case '1':
            case 'Mage':
                return new HeroMage($heroName);
            case '2':
            case 'Warrior':
                return new HeroWarrior($heroName);
            case '3':
            case 'Archer':
                return new HeroArcher($heroName);
            default:
                echo "Ungültige Klasse ausgewählt. Versuchen Wir es noch einmal.\n";
                $this->createHeroByClass($heroName);
        }
    }

    private function assignAttributes($hero): void
    {
        $attributes = [
            'Strength' => 'Stärke',
            'Wisdom' => 'Weisheit',
            'Intelligence' => 'Intelligenz',
            'Dexterity' => 'Geschicklichkeit',
            'Constitution' => 'Konstitution',
            'Charisma' => 'Charisma'
        ];
        $points = 20;

        echo "Du hast $points Punkte zum Verteilen auf die folgenden Attribute: \n";
        foreach ($attributes as $attribute => $name) {
            echo "$name ";
        }
        echo "\n";

        while ($points > 0) {
            foreach ($attributes as $attribute => $name) {
                echo "Verteile Punkte auf $name (Verbleibende Punkte: $points): ";
                $input = trim(fgets(STDIN));
                if (is_numeric($input) && $input <= $points && $input >= 0) {
                    $hero->setAttribute($attribute, $input);
                    $points -= $input;
                } else {
                    echo "Ungültige Eingabe. Versuche es erneut.\n";
                }
            }
        }

        echo "Alle Punkte wurden verteilt!\n";
    }
}