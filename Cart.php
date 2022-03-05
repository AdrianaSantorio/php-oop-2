<?php

require_once __DIR__ . '/Product.php';

class Card
{
    public $products; //array of objects
    public float $total; //product price sum

    public function addToCart($product)
    {
        //se il prodotto esiste (fa parte di product)
        //se il prodotto è disponibile

        $this->products[] = $product;
        $this->total +=  $product->price;
    }

    public function removeFromCart($product)
    {
    }
}
