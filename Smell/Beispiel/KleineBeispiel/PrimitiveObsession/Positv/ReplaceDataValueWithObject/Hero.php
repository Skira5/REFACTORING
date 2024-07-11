<?php

namespace KleineBeispiel\PrimitiveObsession\Positv\ReplaceDataValueWithObject;

Abstract class Hero
{
    public string $name = '';
    public int $level = 0;

    /**
     * Replace Data Value with Object: Wenn eine Klasse (oder mehrere) ein Field enthalten,
     * welches ein eigenes Verhalten und zugehörige Daten hat, wird eine neue Klasse erstellt,
     * welche das Field enthält. Dann speichert man das Objekt der neuen Klasse in der Originalen.
     * -> verstärkt Nachvollziehbarkeit
 */

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
