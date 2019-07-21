<?php

$games = ['Mass Effect', 'Zelda', 'Super Mario Bross'];

usort($games, function ($a, $b) {
	return $a <=> $b;
});

var_dump($games);

class User 
{
	private $name;
	private $age;

	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

   	public function name()
    	{
        		return $this->name;
    	}


    	public function age()
    	{
        		return $this->age;
    	}
}

class UserCollection
{
	protected $users;

   	public function __construct(array $users)
	{
		$this->users = $users;
	}

	public function users()
    	{
        		return $this->users;
    	}

	public function sortBy($property)
	{
		usort($this->users , function ($userOne, $userTwo) {
			return $userOne <=> $userTwo;
		});
	}
	
}

$collection = new UserCollection([
	new User('Ronaldo', 10)
	]);

$collection->sortBy('name');

var_dump($collection->users());