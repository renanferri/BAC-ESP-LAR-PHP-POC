<?php


interface Money 
{
    public function getMoney();
}

class Bank implements Money
{
    public function getMoney()
    {
        return '10';
    }
}

class Broker implements Money
{
    public function getMoney()
    {
        return '15';
    }
}

class OperationsService
{
    public function retrieveInvestments(Money $institution)
    {
        //$institution = new Broker();

        return $institution->getMoney();
    }
}

$service = new OperationsService();

echo $service->retrieveInvestments(new Bank());
echo $service->retrieveInvestments(new Broker());