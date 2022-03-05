<?php

require_once __DIR__ . './Product.php';
require_once __DIR__ . './RegisteredCustomer.php';

class OnlineShop
{
    public array $inventory;
    public $registered_customers;
    //customers?

    public function __construct()
    {
    }

    public function addToInventory($product)
    {
        if ($product instanceof Product || !(in_array($product, $this->inventory))) {
            $this->inventory[] = $product;
        }
    }

    public function isregistered($client)
    {
        return (in_array($client, $this->registered_customers));
    }
}
