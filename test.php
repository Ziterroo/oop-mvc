<?php

class Errors extends Exception implements Countable
{
    protected array $errors = [];
    protected $message;

    public function addErrors(Exception $e)
    {
        $this->errors[] = $e;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function count(): int
    {
        return count($this->errors);
    }
}

function validate($arg): int
{

    $errors = new Errors();
    if ($arg <= 0) {
        $errors->addErrors(new InvalidArgumentException('Число не может быть меньше 0'));
    }

    if ($arg % 2 !== 0) {
        $errors->addErrors(new InvalidArgumentException('Число не может быть меньше нечетным'));;
    }

    if (count($errors) > 0) {
        throw $errors;
    }
    return $arg;
}

try {
    echo validate(-41);
} catch (Errors $errors) {
    var_dump($errors->getErrors());
    foreach ($errors->getErrors() as $error) {
        echo $error->getMessage() . '<br>';
    }
}