<?php

namespace KleineBeispiel\DataClumps\Positive\N1\NebenClassen;

Abstract class Hero
{
    public string $name = '';
    public int $level = 0;

    public ?HitPoints $hitPoints = null;

    public ?Attributes $attributes = null;

    /**
     * @throws \Exception
     */
    public function setAttribute($field, $points): void
    {
        $this->attributes->setAttribute($field, $points);
    }



}
