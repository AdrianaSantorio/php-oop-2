<?php

require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/Cart.php';

class RegisteredCustomer extends Customer
{
    public $clientID;
    public $loyaltyPoint;
    public $discount;
    public $registeredCards;
    public $registeredAddress;
    public $orders;



    public function purchase()
    {
        //success, add points

        //funzione add points
        //this cart total 



    }
}
