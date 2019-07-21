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
		$filtered = [];
		// 0
		foreach ($this->accounts as $account) {
			//1
			if ($account->type() == $accountType) {
				//2
				if ($account->isActive()) {
					//3
					$filtered[] = $account;
				}
			}
		}
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
}

$accounts = [
	Account::open('checking'),
	Account::open('savings'),
];

$accounts = new BankAccounts($accounts);

$savings = $accounts->filterBy('savings');

var_dump($savings);
