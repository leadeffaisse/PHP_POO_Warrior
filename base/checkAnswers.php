<?php

require_once 'Exercise.php';
require_once 'ExerciseLibrary.php';

function checkAnswers()
{
    $changeWarriorID = new Exercise(ExerciseLibrary::EXERCISE_1_TITLE, ExerciseLibrary::EXERCISE_1_FUNCTION);
    $classesExist = new Exercise(ExerciseLibrary::EXERCISE_2_TITLE, ExerciseLibrary::EXERCISE_2_FUNCTION);
    $mustInheritWarriorClass = new Exercise(ExerciseLibrary::EXERCISE_3_TITLE, ExerciseLibrary::EXERCISE_3_FUNCTION);
    $hasWarriorClassMandatoryAttributes = new Exercise(ExerciseLibrary::EXERCISE_4_TITLE, ExerciseLibrary::EXERCISE_4_FUNCTION);
    $haveWarriorInheritedClassesMandatoryProperties = new Exercise(ExerciseLibrary::EXERCISE_5_TITLE, ExerciseLibrary::EXERCISE_5_FUNCTION);
    $haveMethodPower = new Exercise(ExerciseLibrary::EXERCISE_6_TITLE, ExerciseLibrary::EXERCISE_6_FUNCTION);
    $haveWarriorClassesConstructors = new Exercise(ExerciseLibrary::EXERCISE_7_TITLE, ExerciseLibrary::EXERCISE_7_FUNCTION);
    $doesWarriorConstructorSetMandatoryValues = new Exercise(ExerciseLibrary::EXERCISE_8_TITLE, ExerciseLibrary::EXERCISE_8_FUNCTION);
    $doWarriorInheritedClassesSetMandatoryValues = new Exercise(ExerciseLibrary::EXERCISE_9_TITLE, ExerciseLibrary::EXERCISE_9_FUNCTION);
    $weaponClassExists = new Exercise(ExerciseLibrary::EXERCISE_10_TITLE, ExerciseLibrary::EXERCISE_10_FUNCTION);
    $hasWarriorClassWeaponAttribute = new Exercise(ExerciseLibrary::EXERCISE_11_TITLE, ExerciseLibrary::EXERCISE_11_FUNCTION);
    $hasWeaponClassMandatoryAttributes = new Exercise(ExerciseLibrary::EXERCISE_12_TITLE, ExerciseLibrary::EXERCISE_12_FUNCTION);
    $hasWeaponClassAConstructor = new Exercise(ExerciseLibrary::EXERCISE_13_TITLE, ExerciseLibrary::EXERCISE_13_FUNCTION);
    $hasBattleFieldClassCreateMyWarriorMethod = new Exercise(ExerciseLibrary::EXERCISE_14_TITLE, ExerciseLibrary::EXERCISE_14_FUNCTION);
    $doesBatteFieldClassInstanciateWarrior = new Exercise(ExerciseLibrary::EXERCISE_15_TITLE, ExerciseLibrary::EXERCISE_15_FUNCTION);
    $hasBatteFieldClassCreateOtherWarriorMethod = new Exercise(ExerciseLibrary::EXERCISE_16_TITLE, ExerciseLibrary::EXERCISE_16_FUNCTION);
    $doesCreateOtherWarriorMethodInstanciateOtherWarrior = new Exercise(ExerciseLibrary::EXERCISE_17_TITLE, ExerciseLibrary::EXERCISE_17_FUNCTION);

    $exercises = [
        $changeWarriorID,
        $classesExist,
        $mustInheritWarriorClass,
        $hasWarriorClassMandatoryAttributes,
        $haveWarriorInheritedClassesMandatoryProperties,
        $haveMethodPower,
        $haveWarriorClassesConstructors,
        $doesWarriorConstructorSetMandatoryValues,
        $doWarriorInheritedClassesSetMandatoryValues,
        $weaponClassExists,
        $hasWarriorClassWeaponAttribute,
        $hasWeaponClassMandatoryAttributes,
        $hasWeaponClassAConstructor,
        $hasBattleFieldClassCreateMyWarriorMethod,
        $doesBatteFieldClassInstanciateWarrior,
        $hasBatteFieldClassCreateOtherWarriorMethod,
        $doesCreateOtherWarriorMethodInstanciateOtherWarrior,
    ];

    foreach ($exercises as $exercise) {
        $isExerciseValid = $exercise->execute();

        if (!$isExerciseValid) {
            return $exercises;
        }
    }

    return $exercises;
}

function getGoodAnswersCount(array $exercices): int
{
    $count = 0;

    foreach ($exercices as $result) {
        if ($result->isValid) {
            $count++;
        }
    }

    return $count;
}
