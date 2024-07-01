<?php

namespace KleineBeispiel\DataClumps\Positive\N1;


class Enemy
{
    public string $name = '';
    public int $level = 0;
    public int $hitPoints = 0;
    public int $manaPoints = 0;

    public function __construct(string $enemyName,int $enemyLevel,int $enemyHitPoints, int $enemyManaPoints )
    {
        $this->name = $enemyName;
        $this->level = $enemyLevel;
        $this->hitPoints = $enemyHitPoints;
        $this->manaPoints = $enemyManaPoints;
    }

}