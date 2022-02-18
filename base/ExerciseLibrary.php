<?php

require_once 'TestWarrior.php';
require_once '../students/Warrior.php';

foreach ([
             '../students/StartrekWarrior.php',
             '../students/MarvelWarrior.php',
             '../students/PokemonWarrior.php',
             '../students/BattleField.php',
    ] as $classFile) {
    if(file_exists($classFile)) {
        include_once $classFile;
    }
}
abstract class ExerciseLibrary
{
    public const EXERCISE_1_TITLE = '1/ Modifiez la variable globale warriorName dans le fichier <u>students/Warrior.php</u>';
    public const EXERCISE_2_TITLE = '2/ Les <u>classes</u> StartrekWarrior, MarvelWarrior et PokemonWarrior doivent être créées dans le dossier <u>students</u> (une classe par fichier)';
    public const EXERCISE_3_TITLE = '3/ Les <u>classes</u> StartrekWarrior, MarvelWarrior et PokemonWarrior doivent <u>hériter</u> de Warrior';
    public const EXERCISE_4_TITLE = '4/ La <u>classe</u> Warrior doit avoir les <u>attributs (publics)</u> $name (type string), $speed (type int), $life (type int), $shield (type int) et $imageUrl (type string)';
    public const EXERCISE_5_TITLE = '5/ Les <u>classes</u> StartrekWarrior, MarvelWarrior et PokemonWarrior doivent avoir respectivement les <u>attributs (publics de type int)</u> $mentalPower, $superPower et $level';
    public const EXERCISE_6_TITLE = '6/ Les <u>classes</u> StartrekWarrior, MarvelWarrior et PokemonWarrior doivent avoir une méthode <u>getPower (publique)</u> qui retourne respectivement $mentalPower, $superPower et $level<br>⚠ Le type du retour de la méthode doit être indiqué';
    public const EXERCISE_7_TITLE = '7/ Les <u>classes</u> Warrior, StartrekWarrior, MarvelWarrior et PokemonWarrior doivent avoir des <u>constructeurs</u>';
    public const EXERCISE_8_TITLE = '8/ Le <u>constructeur</u> de Warrior doit prendre en paramètre une chaine $warriorName.<br>Puis dans votre constructeur vous initialiserez les attributs comme suit: $name avec le paramètre $warriorName, $speed avec la valeur 30, $life avec la valeur 100, $shield avec la valeur 20<br>⚠ Vous devez typer les paramètres des méthodes (constructeur compris)';
    public const EXERCISE_9_TITLE = '9/ Les <u>constructeurs</u> des sous-classes de Warrior doivent prendre en paramètre un $name, appeler le <u>constructeur</u> de Warrior avec la valeur de ce paramètre et affecter $mentalPower = 8, $superPower = 100, $level = 1';
    public const EXERCISE_10_TITLE = '10/ Une <u>classe</u> Weapon doit être créée dans le fichier <u>students/Weapon.php</u>';
    public const EXERCISE_11_TITLE = '11/ La <u>classe</u> Warrior doit avoir un <u>attribut (public)</u> $weapon (typé "Weapon ou null")';
    public const EXERCISE_12_TITLE = '12/ Weapon doit avoir les <u>attributs (publics)</u> $id (int), $strength (int) et $imageUrl (string)';
    public const EXERCISE_13_TITLE = '13/ Weapon doit avoir un <u>constructeur</u> à 2 arguments $id et $strength qui initialise les attributs associés';
    public const EXERCISE_14_TITLE = '14/ La classe BattleField du fichier students/BattleField.php doit avoir une <u>méthode statique (publique)</u> createMyWarrior';
    public const EXERCISE_15_TITLE = '15/ La méthode createMyWarrior doit <u>instancier</u> un guerrier, lui affecter une image, une arme (qui elle-même a une image) et le sauvegarder (NB. la classe localWarrior contient une <u>méthode</u> saveNew).<br>⚠ Le $name du guerrier doit être la <u>variable globale</u> warriorName.<br/><br/>Créez ensuite votre guerrier grâce au lien <u>Create My Warrior</u> présent en bas de cette page';
    public const EXERCISE_16_TITLE = '16/ La <u>classe</u> BattleField doit avoir une <u>méthode statique (publique)</u> createOtherWarrior';
    public const EXERCISE_17_TITLE = '17/ La <u>méthode statique</u> createOtherWarrior doit <u>instancier</u> un guerrier, lui affecter une arme, une image et le sauvegarder (NB. la <u>classe</u> localWarrior contient une <u>méthode</u> saveNew).<br>Créez ensuite les autres guerriers grâce au lien <u>Create Another</u> présent en bas de cette page';

    public const EXERCISE_1_FUNCTION = 'changeWarriorID';
    public const EXERCISE_2_FUNCTION = 'classesExist';
    public const EXERCISE_3_FUNCTION = 'mustInheritWarriorClass';
    public const EXERCISE_4_FUNCTION = 'hasWarriorClassMandatoryAttributes';
    public const EXERCISE_5_FUNCTION = 'haveWarriorInheritedClassesMandatoryProperties';
    public const EXERCISE_6_FUNCTION = 'haveMethodPower';
    public const EXERCISE_7_FUNCTION = 'haveWarriorClassesConstructors';
    public const EXERCISE_8_FUNCTION = 'doesWarriorConstructorSetMandatoryValues';
    public const EXERCISE_9_FUNCTION = 'doWarriorInheritedClassesSetMandatoryValues';
    public const EXERCISE_10_FUNCTION = 'weaponClassExists';
    public const EXERCISE_11_FUNCTION = 'hasWarriorClassWeaponAttribute';
    public const EXERCISE_12_FUNCTION = 'hasWeaponClassMandatoryAttributes';
    public const EXERCISE_13_FUNCTION = 'hasWeaponClassAConstructor';
    public const EXERCISE_14_FUNCTION = 'hasBattleFieldClassCreateMyWarriorMethod';
    public const EXERCISE_15_FUNCTION = 'doesBatteFieldClassInstanciateWarrior';
    public const EXERCISE_16_FUNCTION = 'hasBatteFieldClassCreateOtherWarriorMethod';
    public const EXERCISE_17_FUNCTION = 'doesCreateOtherWarriorMethodInstanciateOtherWarrior';

    public static function changeWarriorID(): bool
    {
        return !empty($GLOBALS['warriorName']) && $GLOBALS['warriorName'] !== 'azerty';
    }

    public static function classesExist(): bool
    {
        return class_exists('StartrekWarrior')
            && class_exists('MarvelWarrior')
            && class_exists('PokemonWarrior');
    }

    public static function mustInheritWarriorClass()
    {
        $startrekWarrior = new StartrekWarrior('1');
        $marvelWarrior = new MarvelWarrior('2');
        $pokemonWarrior = new PokemonWarrior('3');

        return is_subclass_of($startrekWarrior, 'Warrior')
            && is_subclass_of($marvelWarrior, 'Warrior')
            && is_subclass_of($pokemonWarrior, 'Warrior');
    }

    public static function hasWarriorClassMandatoryAttributes(): bool
    {
        return self::checkProperties(Warrior::class, [
            'name' => 'string',
            'speed' => 'int',
            'life' => 'int',
            'shield' => 'int',
            'imageUrl' => 'string',
        ]);
    }

    public static function haveWarriorInheritedClassesMandatoryProperties()
    {
        $startrekWarrior = new StartrekWarrior('5');
        $marvelWarrior = new MarvelWarrior('6');
        $pokemonWarrior = new PokemonWarrior('7');

        try {
            $rp = new ReflectionProperty(StartrekWarrior::class, 'mentalPower');
            $startrekWarriorHasValidType = $rp->hasType() && $rp->getType()->getName() === 'int';
        } catch (Exception) {
            $startrekWarriorHasValidType = false;
        }

        try {
            $rp = new ReflectionProperty(MarvelWarrior::class, 'superPower');
            $marvelWarriorHasValidType = $rp->hasType() && $rp->getType()->getName() === 'int';
        } catch (Exception) {
            $marvelWarriorHasValidType = false;
        }

        try {
            $rp = new ReflectionProperty(PokemonWarrior::class, 'level');
            $pokemonWarriorHasValidType = $rp->hasType() && $rp->getType()->getName() === 'int';
        } catch (Exception) {
            $pokemonWarriorHasValidType = false;
        }

        return property_exists($startrekWarrior, 'mentalPower')
            && !property_exists($startrekWarrior, 'superPower')
            && !property_exists($startrekWarrior, 'level')
            && $startrekWarriorHasValidType
            && property_exists($marvelWarrior, 'superPower')
            && !property_exists($marvelWarrior, 'mentalPower')
            && !property_exists($marvelWarrior, 'level')
            && $marvelWarriorHasValidType
            && property_exists($pokemonWarrior, 'level')
            && !property_exists($pokemonWarrior, 'mentalPower')
            && !property_exists($pokemonWarrior, 'superPower')
            && $pokemonWarriorHasValidType;
    }

    public static function haveMethodPower()
    {
        $startrekWarrior = new StartrekWarrior('9');
        $startrekWarrior->mentalPower = 12;
        $marvelWarrior = new MarvelWarrior('10');
        $marvelWarrior->superPower = 12;
        $pokemonWarrior = new PokemonWarrior('11');
        $pokemonWarrior->level = 12;

        return method_exists($startrekWarrior, 'getPower') && $startrekWarrior->getPower() === $startrekWarrior->mentalPower
            && method_exists($marvelWarrior, 'getPower') && $marvelWarrior->getPower() === $marvelWarrior->superPower
            && method_exists($pokemonWarrior, 'getPower') && $pokemonWarrior->getPower() === $pokemonWarrior->level;
    }

    public static function haveWarriorClassesConstructors()
    {
        $warrior = new TestWarrior('8');
        $startrekWarrior = new StartrekWarrior('9');
        $marvelWarrior = new MarvelWarrior('10');
        $pokemonWarrior = new PokemonWarrior('11');

        return method_exists($warrior, '__construct')
            && method_exists($startrekWarrior, '__construct')
            && method_exists($marvelWarrior, '__construct')
            && method_exists($pokemonWarrior, '__construct');
    }

    public static function doesWarriorConstructorSetMandatoryValues()
    {
        $warrior = new TestWarrior('12');


        $class = new ReflectionClass('TestWarrior');
        $classParameters = $class->getMethod('__construct')->getParameters();
        $hasValidParameter = count($classParameters) === 1 &&
            $classParameters[0]->hasType() &&
            $classParameters[0]->getType()->getName() === 'string';

        return
            $hasValidParameter
            && isset($warrior->name) && $warrior->name === '12'
            && isset($warrior->speed) && $warrior->speed === 30
            && isset($warrior->shield) && $warrior->shield === 20
            && isset($warrior->life) && $warrior->life === 100;
    }

    public static function doWarriorInheritedClassesSetMandatoryValues()
    {
        $hasValidConstructors = true;
        foreach ([
                     'StartrekWarrior',
                     'MarvelWarrior',
                     'PokemonWarrior',
                 ] as $className) {
            $class = new ReflectionClass($className);
            $classParameters = $class->getMethod('__construct')->getParameters();
            $hasValidParameter = count($classParameters) === 1 &&
                $classParameters[0]->hasType() &&
                $classParameters[0]->getType()->getName() === 'string';

            $hasValidConstructors = $hasValidConstructors && $hasValidParameter;
        }
        if (!$hasValidConstructors) {
            return false;
        }

        $startrekWarrior = new StartrekWarrior('10');
        $marvelWarrior = new MarvelWarrior('11');
        $pokemonWarrior = new PokemonWarrior('12');

        return isset($startrekWarrior->name) && $startrekWarrior->name === '10' && $startrekWarrior->mentalPower === 8 &&
            isset($marvelWarrior->name) && $marvelWarrior->name === '11' && $marvelWarrior->superPower === 100 &&
            isset($pokemonWarrior->name) && $pokemonWarrior->name === '12' && $pokemonWarrior->level === 1 && $pokemonWarrior->speed === 30 && $pokemonWarrior->shield === 20 && $pokemonWarrior->life === 100;
    }

    public static function weaponClassExists()
    {
        return class_exists('Weapon') && !is_subclass_of(new Weapon(1, 2), 'Warrior');
    }

    public static function hasWarriorClassWeaponAttribute()
    {
        $warrior = new TestWarrior(10);

        $rc = new ReflectionClass(Warrior::class);
        $hasWeapon = $rc->hasProperty('weapon')
            && $rc->getProperty('weapon')
            && $rc->getProperty('weapon')->getDeclaringClass()->getName() === Warrior::class
            && $rc->getProperty('weapon')->hasType()
            && $rc->getProperty('weapon')->getType()->getName() === Weapon::class;

        if (!$hasWeapon) {
            return false;
        }

        try {
            $warrior->weapon = new Weapon(5, 100);
            $warrior->weapon = null;

            return true;
        } catch (TypeError $exception) {
            return false;
        }
    }

    public static function hasWeaponClassMandatoryAttributes()
    {
        return self::checkProperties(Weapon::class, [
            'id' => 'int',
            'strength' => 'int',
            'imageUrl' => 'string',
        ]);
    }

    public static function hasWeaponClassAConstructor()
    {
        $weapon = new Weapon(22, 100);

        return method_exists($weapon, '__construct') && $weapon->id === 22 && $weapon->strength === 100;
    }

    public static function hasBattleFieldClassCreateMyWarriorMethod()
    {
        try {
            $methodChecker = new ReflectionMethod('BattleField', 'createMyWarrior');

            return $methodChecker->isStatic();
        } catch (Exception $exception) {
            return false;
        }
    }

    public static function doesBatteFieldClassInstanciateWarrior()
    {
        try {
            $warrior = Warrior::getWarrior($GLOBALS['warriorName']);
        } catch (Exception $exception) {
            return false;
        }

        return $warrior !== null && $warrior->weapon !== null && $warrior->imageUrl !== '';
    }

    public static function hasBatteFieldClassCreateOtherWarriorMethod()
    {
        try {
            $methodChecker = new ReflectionMethod('BattleField', 'createOtherWarrior');

            return $methodChecker->isStatic();
        } catch (Exception $exception) {
            return false;
        }
    }

    public static function doesCreateOtherWarriorMethodInstanciateOtherWarrior()
    {
        try {
            $otherWarriors = Warrior::getWarriorsExceptOne($GLOBALS['warriorName']);
        } catch (Exception $exception) {
            return false;
        }

        return sizeof($otherWarriors) !== 0;
    }

    protected static function checkProperties($class, array $propertiesAndTypes): bool
    {
        $isSuccess = true;

        foreach ($propertiesAndTypes as $name => $type) {
            if (!property_exists($class, $name)) {
                $isSuccess = false;
                continue;
            }
            $rp = new ReflectionProperty($class, $name);
            $hasValidType = $rp->hasType() && $rp->getType()->getName() === $type;

            $isSuccess = $isSuccess && $hasValidType;
        }

        return $isSuccess;
    }
}
