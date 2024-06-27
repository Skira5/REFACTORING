<?php
namespace src;
class Game
{
    private \src\creatHero $creatHero;
    public function __construct(
        creatHero $creatHero
    )
    {
        $this->creatHero = $creatHero;
    }

    public function start()
        {
            $hero = $this->creatHero->CreatHero();




        }
}