<?php

require_once __DIR__ . '/Product.php';

class Shop
{
    //*PROPRIETÀ
    public $inventory;   //array di oggetti
    public $registered_clients;

    //*CONSTRUCTOR
    public function __construct()
    {
        $this->inventory = [];
        $this->registered_clients = [];
    }

    //*SETTERS & GETTERS

    //*ALTRE FUNZIONI

    //*AGGIUNGERE PRODOTTI ALL' INVENTARIO
    public function addProductToInventory($product, $quantity)
    {
        if (!($product instanceof Product)) {   //se $product è un prodotto
            //devo farlo in fasi diverse per ottenere errori diversi?
        } else if (array_key_exists($product->product_ID, $this->inventory)) { //se non è presente nell' inventario
            //errore, il prodotto è già presente in inventario
        } else { //aggiungi all' inventario
            $this->inventory[$product->product_ID]['Product'] = $product;
            $this->inventory[$product->product_ID]['Stock'] = $quantity;
            //si può? boh? evoca la funzione set stock di product
            $product->setInStock($this->inventory[$product->product_ID]['Stock']);
        }
    }
    //*RIMUOVERE PRODOTTI DALL'INVENTARIO
    //TODO:rimuovere prodotti dall' inventario

    //*AGGIUNGERE CLIENTI
    //*RIMUOVERE CLIENTI
}


$pet_shop = new Shop;

$pet_shop->addProductToInventory($shiba_beef, 2);

var_dump($pet_shop);
