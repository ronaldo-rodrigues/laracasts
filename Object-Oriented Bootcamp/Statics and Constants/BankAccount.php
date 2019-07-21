<?php

class BankAccount
{
    public static $tax = .09;

    const TAX = .09;
}

echo BankAccount::$tax = 1.5;

echo BankAccount::TAX;