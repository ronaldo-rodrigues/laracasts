<?php


use Acme\Person;
use Acme\Staff;
use Acme\Business;


$ronaldo = new Person("Ronaldo Rodrigues");

$staff = new Staff([$ronaldo]);

$laracasts = new Business($staff);

$laracasts->hire(new  Acme\Person('Ronaldo'));

var_dump($laracasts->getStaffMembers());
