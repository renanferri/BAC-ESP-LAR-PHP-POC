<?php

class Bank 
{
    private $name;
    public $address;

    public function setName($name)
    {
        $this->name = 'banco ' . $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setTax()
    {
        return 10;
    }
}

$bank1 = new Bank();

$bank1->setName('Bradesco');

echo $bank1->getName();