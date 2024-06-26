<?php
namespace src;
use src\Hero\Hero;
use src\Hero\HeroMage;

class Game
{
        public function start()
        {
            echo "Willkommen \n";

            echo "Bitte nenne Sie ihren Namen";
            $heroName = trim(fgets(STDIN));
            var_dump($heroName);
            echo "Wähle deine Klasse \n
            1. Mage    
            2. Warrior
            3. HeroArcher
            ";
            $heroClass = trim(fgets(STDIN));
            if ($heroClass === 'Mage' || $heroClass === '1' ){
                $hero = new HeroMage($heroName);
            }
            if ($heroClass === 'Warrior' || $heroClass === '2' ){



            }
            if ($heroClass === 'HeroArcher' || $heroClass === '3' ){




            }




        }
}