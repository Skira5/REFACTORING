<?php

namespace KleineBeispiel\LargeClass\Positive\NebenClassen;

class Attributes
{
    public int $strength = 0;
    public int $dexterity = 0;
    public int $wisdom = 0;
    public int $intelligence = 0;
    public int $constitution = 0;
    public int $charisma = 0;

    /**
     * @throws \Exception
     */
    public function setAttribute($field, $points): void {
        switch ($field) {
            case 'Stärke' || 'strength':
                $this->strength = $points;
                break;
            case 'Weisheit' || 'wisdom':
                $this->wisdom = $points;
                break;
            case 'Intelligenz' || 'intelligence':
                $this->intelligence = $points;
                break;
            case 'Geschicklichkeit' || 'dexterity':
                $this->dexterity = $points;
                break;
            case 'Konstitution' || 'constitution':
                $this->constitution = $points;
                break;
            case 'Charisma' || 'charisma':
                $this->charisma = $points;
                break;
            default:
                throw new \Exception("Unbekanntes Attribut: $field");
        }
    }






}