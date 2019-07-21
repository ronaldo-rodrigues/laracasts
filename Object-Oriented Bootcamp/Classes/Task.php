<?php

class Task
{
    public $description;

    public $completed = false;

    public function _construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task("Apredendo OOP", "O Professor bla bla bla");
$task->complete();

var_dump($task->completed);
