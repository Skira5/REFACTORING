<?php

namespace PositiveBeispiel\src\Hero;

use Exception;
use KleineBeispiel\LongMethod\Positve\ExtractMethode\NebenClassen\Attributes;
use KleineBeispiel\LongMethod\Positve\ExtractMethode\NebenClassen\HitPoints;

Abstract class Hero
{
    public string $name = '';
    public int $level = 0;

    public ?HitPoints $hitPoints = null;

    public ?Attributes $attributes = null;

    /**
     * @throws Exception
     */
    public function setAttribute($field, $points): void
    {
        $this->attributes->setAttribute($field, $points);
    }





}
