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
        if (!($product instanceof Product)) { //se il prodotto esiste (fa parte di product)
            //errore    //TODO:controllo anche se il prodotto è presente nell' inventario?
        } else if (!($product->in_stock)) {     //se il prodotto è disponibile
            //errore
        } else {    //TODO:si potrebbe gestire la quantità? se il prodotto è già nel carrello e in quel caso aumentare semplicemente la quantità
            $this->products[] = $product;
            $this->addToTotal($product);
        }
    }

    public function addToTotal($product)
    {
        $this->total += $product->price;
    }

    public function removeFromCart($product)
    {
    }
}
