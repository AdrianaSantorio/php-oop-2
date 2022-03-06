<?php

require_once __DIR__ . '/Shop.php';


class Product
{

    public $ID;
    public $name;
    public $price;
    public $barcode;
    public $in_stock; //(o vailable se mi semplifica la vita)

    public function __construct($name, $price, $barcode)
    {
        $this->name = $name;
        $this->price = $price;
        $this->barcode = $barcode;
        $this->in_stock = true;
    }

    public function getProductPrice()
    {
        return '€' . $this->price;
    }

    public function setProductPrice($price)
    {
        $this->price = $price;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }
}


$shiba_beef = new Product('Royak cani Maxi Adult 15 KG', 57.50, '3855679');

echo $shiba_beef->name;

echo '<br>';

echo $shiba_beef->getProductPrice();

var_dump($shiba_beef);
