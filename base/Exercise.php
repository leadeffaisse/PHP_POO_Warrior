<?php

require_once '../students/Warrior.php';
require_once 'NoticeException.php';

class Exercise
{
    public string $title;
    public string $validationFunction;
    public bool $isValid = false;

    function __construct(string $title, string $validationFunction)
    {
        $this->title = $title;
        $this->validationFunction = $validationFunction;
    }

    public function execute(): bool
    {
        try {
            $this->isValid = ExerciseLibrary::{$this->validationFunction}();
        } catch (NoticeException $exception) {
            echo sprintf('<b>Notice:</> %s in %s on line %s', $exception->getMessage(), $exception->getFile(), $exception->getLine());

            return false;
        }

        return $this->isValid;
    }
}
