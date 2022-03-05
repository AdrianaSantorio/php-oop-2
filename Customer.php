<?php

class Customer
{
    public $first_name;
    public $last_name;
    public $cart;

    public function __construct($first_name, $last_name, $shipping_address)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->shipping_address = $shipping_address;
    }
}
