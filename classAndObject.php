<?php

class Bank 
{
    public $name;
    public $address;

    public function setTax()
    {
        return 10;
    }
}

$bank1 = new Bank();

$bank1->name = 'Bradesco';
$bank1->address = 'Rua X';

$bank2 = new Bank();

$bank2->name = 'NuBank';
$bank2->address = 'Rua Y';
$bank2->address = 'Rua Y';

var_dump($bank1, $bank2);

echo $bank2->setTax();
