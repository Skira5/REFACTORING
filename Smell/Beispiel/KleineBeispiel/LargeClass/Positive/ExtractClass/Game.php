<?php

class Game
{

    /**
     *Extract Class: Wenn eine Klasse die Arbeit von 2 erledigt,
     * wird eine neue Klasse erstellt und die relevanten Fields und Methoden werden eingefügt.
     * -> Code wird einfacher zu verstehen, sicherere Wartung
     */
    public function start()
    {
        $creatHero = new CreatHero();
        $creatHero->createHero();
    }
}