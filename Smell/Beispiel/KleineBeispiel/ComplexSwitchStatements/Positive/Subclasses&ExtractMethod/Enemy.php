<?php


/**
 *
 *Extract Superclass:
 * Wenn Klassen ähnliche Fields und Methoden haben, wird eine gemeinsame Oberklasse erstellt,
 * in welche alle identischen Fields und Methoden verschoben werden.
 * -> weniger doppelter Code
 */

Abstract class Enemy
{
    protected string  $name = '';
    protected int $level = 0;
    protected int $hitPoints = 0;
    protected string $race = '';

    /**
     * @throws \Exception
     */
    public function __construct(string $name, string $race, int $level) {
        $this->name = $name;
        $this->level = $level;
        $this->race = $race;


        /**Logic wird in methoden ausgelagert dadurch wird der Switch übersichtlicher
         * Extract Method: um eine Methode übersichtlicher zu machen und um sie “abzuspecken”,
         * wird eine neue Methode erstellt,
         * in welcher der “überschüssige” Code eingefügt und mit einem Call der neuen Methode ersetzt.
         * -> lesbarerer Code, weniger doppelter Code, Fehler sind unwahrscheinlicher
         * (isolierter unabhängige Code-Stellen)
         * */
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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    public function getHitPoints(): int
    {
        return $this->hitPoints;
    }

    public function setHitPoints(int $hitPoints): void
    {
        $this->hitPoints = $hitPoints;
    }

    public function getRace(): string
    {
        return $this->race;
    }

    public function setRace(string $race): void
    {
        $this->race = $race;
    }



}