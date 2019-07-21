<?php

class BankAccounts
{
	protected $accounts;

	function __construct($accounts)
	{
		$this->accounts = $accounts;
	}

	public function filterBy($accountType)
	{
		return array_filter($this->accounts, function ($account) use ($accountType) {
			return $account->isOfType($accountType);
		});
	}
}

class Account
{
	private $type;

	public function __construct($type)
	{
		$this->type = $type;
	}

	public static function open($type)
	{
		return new static($type);
	}

	public function type()
	{
		return $this->type;
	}

	public function isActive()
	{
		return true;
	}

	public function isOfType($accountType)
	{
		return $this->type() == $accountType && $this->isActive();
	}
}

$accounts = [
	Account::open('checking'),
	Account::open('savings'),
];

$accounts = new BankAccounts($accounts);

$savings = $accounts->filterBy('savings');

var_dump($savings);
