<?php

class StartrekWarrior extends Warrior
{
    public int $mentalPower;

    public function getPower(): int
    {
        return $this->mentalPower;
    }

    function __construct(string $name) {
        parent::__construct($name);
        $this->mentalPower = 8;
    }
}