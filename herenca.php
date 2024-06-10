<?php

class Bank 
{
    private $name = 'aa';
    protected $address;
    public $teste;

    public function setName($name)
    {
        $this->name = 'banco ' . $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAddress($value)
    {
        $this->address = 'address: ' . $value;
    }

    public function getAddress()
    {
        return $this->address;
    }
}

class NationalBank extends Bank
{
    public $cnpj;

    public function setAddress($value)
    {        
        $this->address = 'natAddress: ' . $value;
    }
}

$bank = new Bank();

// **** Wrong access private scope directly
$bank->name = 'private';
echo $bank->name;

// **** Wrong access protected scope directly
// $bank->address = 'protected';
// echo $bank->address;

// $bank->setAddress('rua 123');
// $bank->setName('renan');

// **** Right Access
// echo $bank->getName() ;
// echo $bank->getAddress();

// **** PUBLIC OK
// $bank->teste = 'public';
// echo $bank->teste;


$bankNational = new NationalBank();

// **** Wrong access private scope directly. PHP creates one public implicity in this case
// $bankNational->name = 'private herança';
// echo $bankNational->name;

// explication php assumed as public
//$bankNational->qlqCoisa = 'qlq coisa';
//echo $bankNational->qlqCoisa;

// **** Wrong access protected scope directly
// $bankNational->address = 'protected herança';
// echo $bankNational->address;

// $bankNational->setName('Bradesco');

// $bankNational->setName('E agora?');
//$bankNational->setAddress('nacional rua teste');

// echo $bankNational->getName();

//echo $bankNational->name; //????
// echo $bankNational->address;


