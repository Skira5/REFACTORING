<?php

namespace KleineBeispiel\LongMethod\Negative;


use KleineBeispiel\LongMethod\Negative\NebenClassen\HeroArcher;
use KleineBeispiel\LongMethod\Negative\NebenClassen\HeroMage;
use KleineBeispiel\LongMethod\Negative\NebenClassen\HeroWarrior;

class LongMethod
{


        /** functions Namen sollten im CamelCase geschrieben sein.
         * Methode enthält zu viel code*/
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
}