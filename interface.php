<?php


interface Money 
{
    public function getMoney();
}

class Bank implements Money
{
    public function getMoney()
    {
        return "";
    }
}

class Broker implements Money
{
    public function getMoney()
    {
        return "";
    }
}