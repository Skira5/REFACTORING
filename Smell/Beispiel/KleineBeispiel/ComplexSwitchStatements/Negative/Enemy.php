<?php

namespace KleineBeispiel\ComplexSwitchStatements\Negative;
use Exception;

class Enemy {
    public string $name = '';
    public int $level = 0;
    public int $hitPoints = 0;
    public string $race = '';
    public string $rang = '';

    /**
     * @throws Exception
     */
    public function __construct(string $name, string $race, int $level) {
        $this->name = $name;
        $this->level = $level;
        $this->race = $race;
        /**Verschachtelter und unübersichtlicher switch */
        switch ($race) {
            case 'tombKing':
                switch ($level) {
                    case $level < 5:
                        $this->hitPoints = 10 + ($level * 2);
                        break;
                    case $level < 10:
                        $this->hitPoints = 20 + ($level * 3);
                        break;
                    case $level < 20:
                        $this->hitPoints = 40 + ($level * 4);
                        break;
                    case $level < 30:
                        $this->hitPoints = 80 + ($level * 5);
                        break;
                    case $level < 40:
                        $this->hitPoints = 160 + ($level * 6);
                        break;
                    case $level < 50:
                        $this->hitPoints = 320 + ($level * 7);
                        break;
                    default:
                        $this->hitPoints = 500 + ($level * 8);
                        break;
                }
                break;

            case 'Orcs':
                switch ($level) {
                    case $level < 5:
                        $this->hitPoints = 10 + ($level * 1.5);
                        break;
                    case $level < 10:
                        $this->hitPoints = 20 + ($level * 2.5);
                        break;
                    case $level < 20:
                        $this->hitPoints = 40 + ($level * 3.5);
                        break;
                    case $level < 30:
                        $this->hitPoints = 80 + ($level * 4.5);
                        break;
                    case $level < 40:
                        $this->hitPoints = 160 + ($level * 5.5);
                        break;
                    case $level < 50:
                        $this->hitPoints = 320 + ($level * 6.5);
                        break;
                    default:
                        $this->hitPoints = 500 + ($level * 7.5);
                        break;
                }
                break;

            case 'Undead':
                switch ($level) {
                    case $level < 5:
                        $this->hitPoints = 15 + ($level * 2);
                        break;
                    case $level < 10:
                        $this->hitPoints = 30 + ($level * 2.5);
                        break;
                    case $level < 20:
                        $this->hitPoints = 50 + ($level * 3);
                        break;
                    case $level < 30:
                        $this->hitPoints = 100 + ($level * 3.5);
                        break;
                    case $level < 40:
                        $this->hitPoints = 200 + ($level * 4);
                        break;
                    case $level < 50:
                        $this->hitPoints = 400 + ($level * 4.5);
                        break;
                    default:
                        $this->hitPoints = 600 + ($level * 5);
                        break;
                }
                break;

            case 'Dragon':
                switch ($level) {
                    case $level < 5:
                        $this->hitPoints = 50 + ($level * 5);
                        break;
                    case $level < 10:
                        $this->hitPoints = 100 + ($level * 6);
                        break;
                    case $level < 20:
                        $this->hitPoints = 200 + ($level * 7);
                        break;
                    case $level < 30:
                        $this->hitPoints = 400 + ($level * 8);
                        break;
                    case $level < 40:
                        $this->hitPoints = 800 + ($level * 9);
                        break;
                    case $level < 50:
                        $this->hitPoints = 1600 + ($level * 10);
                        break;
                    default:
                        $this->hitPoints = 3200 + ($level * 12);
                        break;
                }
                break;

            default:
                throw new Exception("Invalid race type");
        }
    }
}
