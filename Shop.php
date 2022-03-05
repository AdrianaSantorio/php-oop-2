<?php

require_once __DIR__ . '/Product.php';

class Shop
{
    protected $inventory;   //array di oggetti
    protected $registered_clients;

    public function addProductToInventory($product)
    {
        //se $product è un prodotto
        //se non è presente nell' inventario
        //aggiungi all' inventario
        //stabilisci un ID (numero casuale da 1000 a 9999 non già presente fra gli id dei prodotti nell' inventario)(quale funzione?)
        //si può? boh? evoca la funzione set id di product

        if (!($product instanceof Product))
            //devo farlo in fasi diverse per ottenere errori diversi?

            $ID = 20;

        $product->setID($ID);
    }
}
