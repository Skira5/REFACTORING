<?php


class EnemyTomeKings extends Enemy
{

    public function __construct(string $name, string $race, int $level)
    {
        parent::__construct($name, $race, $level);
    }

    public function calculateHitPoints($level, $base):void
    {
        $this->hitPoints = $base + $level * 3;
    }
}