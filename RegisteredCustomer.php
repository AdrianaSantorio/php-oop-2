<?php

require_once __DIR__ . '/Customer.php';
class RegisteredCustomer extends Customer
{
    //*PROPRIETÀ
    public $client_ID;
    public $loyaltyPoint;
    public $discount;
    public $registeredCards;
    public $registeredAddress;
    public $orders;
    public $email;
    public $password;

    //*CONSTRUCTOR

    public function __construct($email)
    {
        $this->setTemporaryID();
        $this->setCart($this->client_ID);
        $this->orders = [];
        $this->setEmail($email);
    }

    //*SETTERS GETTERS

    //*EMAIL
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        $this->email;
    }
    //*

    // public function purchase()
    // {

    //     //applicare sconto

    //     //success, add points

    //     //funzione add points
    //     //this cart total 



    // }
}
