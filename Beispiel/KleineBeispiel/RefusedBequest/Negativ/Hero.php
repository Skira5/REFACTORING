<?php

namespace KleineBeispiel\RefusedBequest\Negativ;

use Exception;


Abstract class Hero
{
    public string $name = '';
    public int $level = 0;

    public ?HitPoints $hitPoints = null;

    public ?Attributes $attributes = null;
    public array $spells = [];
    public int $manaPointsMax = 20;

    public int $manaPoints = 20;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    /**
     * @throws Exception
     */
    public function setAttribute($field, $points): void
    {
        $this->attributes->setAttribute($field, $points);
    }

    public function attack($target) {
        echo "$this->name attacks $target->name!\n";
        // Standard-Angriffslogik hier implementieren
    }

    public function defend() {
        echo "$this->name defends!\n";
        // Standard-Verteidigungslogik hier implementieren
    }



}
