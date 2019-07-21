<?php

class Person
{
    public $name;

    public $age;

    public function _construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age * 365;
    }

    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception("Pessoa não tem a idade suficiente.");
        }

        $this->age = $age;
    }
}

$john = new Person("Ronaldo");
$john->setAge(30);

$john->age = 3;

var_dump($john->age);
