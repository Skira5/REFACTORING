<?php


Abstract class Enemy
{
    public string  $name = '';
    public int $level = 0;
    public int $hitPoints = 0;
    public string $race = '';

    /**
     * @throws \Exception
     */
    public function __construct(string $name, string $race, int $level) {
        $this->name = $name;
        $this->level = $level;
        $this->race = $race;


        /**Logic wird in methoden ausgelagert dadurch wird der Switch übersichtlicher*/
        switch ($level) {
            case $level < 5:
                $this->calculateHitPoints($level, 10);
                break;
            case $level < 10:
                $this->calculateHitPoints($level, 20);
                break;
            case $level < 20:
                $this->calculateHitPoints($level, 40);
                break;
            case $level < 30:
                $this->calculateHitPoints($level, 80);
                break;
            case $level < 40:
                $this->calculateHitPoints($level, 160);
                break;
            case $level < 50:
                $this->calculateHitPoints($level, 320);
                break;
            default: throw new \Exception('unbekanntes level');
        }
    }

    abstract public function calculateHitPoints($level, $base): void;



}