<?php

class PokemonWarrior extends Warrior
{
    public int $level;

    public function getPower(): int
    {
        return $this->level;
    }

    function __construct(string $name) {
        parent::__construct($name);
        $this->level = 1;
    }
}