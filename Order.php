<?php

class Order
{

    //*PROPRIETÀ
    public $client;
    public $client_ID;
    public array $products;
    public $order_total;
    public $client_address;
    public bool $delivered;
    public $order_ID;

    //*CONSTRUCTOR

    public function __construct($client, $client_ID, $products, $order_total, $client_address)
    {
        $this->setClient($client);
        $this->setClientID($client_ID);
        $this->setOrderID($client_ID);
        $this->setProducts($products);
        $this->setOrderTotal($order_total);
        $this->setClientAddress($client_address);
        $this->delivered = false;
    }

    //*CLIENT
    public function setClient($client)
    {
        $this->client = $client;
    }
    public function getClient()
    {
        return $this->client;
    }
    //*CLIENT ID
    public function setClientID($ID)
    {
        $this->client_ID = $ID;
    }
    public function getClientID()
    {
        return $this->client_ID;
    }
    //*ORDER ID
    public function setOrderID($client_ID)
    {
        $order_ID = intval($client_ID . 000);

        while (array_key_exists($order_ID, $this->client->orders)) {
            $order_ID += 1;
        }

        $this->order_ID = $order_ID;
    }
    public function getOrderID()
    {
        return $this->order_ID;
    }
    //*PRODUCTS
    public function setProducts($products)
    {
        $this->products = $products;
    }
    public function getProducts($products)
    {
        return $this->$products;
    }
    //*ORDER TOTAL
    public function setOrderTotal($order_total)
    {
        $this->order_total = $order_total;
    }
    public function getOrderTotal()
    {
        return $this->order_total;
    }
    //*CLIENT ADDRESS
    public function setClientAddress($client_address)
    {
        $this->client_address = $client_address;
    }
    public function getClientAddress()
    {
        return $this->client_address;
    }
}
