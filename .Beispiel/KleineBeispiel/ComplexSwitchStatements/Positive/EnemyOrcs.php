<?php

namespace KleineBeispiel\ComplexSwitchStatements\Positive;

use Enemy;

class EnemyOrcs extends Enemy
{
    public function __construct(string $name, string $race, int $level)
    {
        parent::__construct($name, $race, $level);
    }

    public function calculateHitPoints($level, $base): void
    {

            $this->hitPoints += round(pi() * $level / $base + sqrt(64) -2) ;
    }
}