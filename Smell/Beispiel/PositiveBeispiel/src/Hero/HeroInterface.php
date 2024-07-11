<?php

namespace PositiveBeispiel\src\Hero;

use Exception;

interface HeroInterface
{
    /**
     * @throws Exception
     */
    public function setAttribute($field, $points): void;
}