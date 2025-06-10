<?php

class MarvelWarrior extends Warrior
{
    public int $superPower;

    public function getPower(): int
    {
        return $this->superPower;
    }

    function __construct(string $name) {
        parent::__construct($name);
        $this->superPower = 100;
    }
}