<?php

require_once __DIR__ . '/Product.php';

class Cart
{
    public $client_ID;
    public $products; //array of objects
    public float $total; //product price sum

    public function __construct($client_ID)
    {
        //secondo me c'è un modo migliore ma vabbè.
        $this->client_ID = $client_ID;
        $this->products = [];
        $this->total = 0;
    }

    public function getTotal()
    {
        return '€' . $this->total;
    }

    public function addToCart($product)
    {
        //se il prodotto esiste (fa parte di product)
        //se il prodotto è disponibile

        $this->products[] = $product;
        $this->addToTotal($product);
    }

    public function addToTotal($product)
    {
        $this->total += $product->price;
    }

    public function removeFromCart($product)
    {
    }
}
