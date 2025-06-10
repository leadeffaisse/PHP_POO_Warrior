<?php

use phpDocumentor\Reflection\Types\Boolean;

require_once __DIR__ . "/../base/LocalWarrior.php";

$GLOBALS['warriorName'] = 'qwerty';

abstract class Warrior extends LocalWarrior
{
    public string $name;
    public int $speed;
    public int $life;
    public int $shield;
    public string $imageUrl;
    public ?Weapon $weapon;

    function __construct(string $warriorName) {
        $this->name = $warriorName;
        $this->speed = 30;
        $this->life = 100;
        $this->shield = 20;
    }
} 