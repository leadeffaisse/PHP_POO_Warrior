<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "Warrior.php";


class BattleField extends BaseBattleField
{
    public static function createMyWarrior() {
        global $warriorName;

        $weapon = new Weapon(1, 50);
        $weapon->imageUrl = "https://example.com/weapon.png";

        $warrior = new PokemonWarrior($warriorName);
        $warrior->imageUrl = "https://example.com/warrior.png";
        $warrior->weapon = $weapon;
        $warrior->saveNew();
        return $warrior;
    }

    public static function createOtherWarrior() {

        $weapon = new Weapon(2, 60);
        $weapon->imageUrl = "https://example.com/weapon.png";

        $warrior = new pokemonWarrior("Pikachu");
        $warrior->imageUrl = "https://example.com/warrior.png";
        $warrior->weapon = $weapon;
        $warrior->saveNew();
        return $warrior;
    }
}
