<?php

namespace KleineBeispiel\ComplexSwitchStatements\Positive;

use Enemy;

class EnemyDragon extends Enemy
{


    public function __construct(string $name, string $race, int $level)
    {
        parent::__construct($name, $race, $level);
    }

    public function calculateHitPoints($level, $base): void
    {
        $this->hitPoints = round(pow($base, $level));
    }
}