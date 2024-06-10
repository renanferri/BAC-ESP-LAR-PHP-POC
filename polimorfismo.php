<?php

class Bank 
{
    public $balance;

    public function getMoney()
    {
        return $this->balance;
    }
}

class NationalBank extends Bank
{   
    public function getMoney()
    {
        return "R$ " . $this->balance;
    }
}

class InternationalBank extends Bank
{   
    public function getMoney()
    {
        return "US$ " . $this->balance;
    }
}


$bankNational = new NationalBank();
$bankNational->balance = 10;

$bankInternational = new InternationalBank();
$bankInternational->balance = 10;

echo $bankNational->getMoney();
echo $bankInternational->getMoney();