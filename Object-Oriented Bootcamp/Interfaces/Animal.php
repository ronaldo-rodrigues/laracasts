<?php


interface Animal
{
    public function communicate();
}


class Dog implements Animal
{
    public function communicate()
    {
        // TODO: Implement communicate() method.
        return 'Au au au';
    }
}


class Cat implements Animal
{
    public function communicate()
    {
        // TODO: Implement communicate() method.
        return 'Meow meow meow';
    }
}
