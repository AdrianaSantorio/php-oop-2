<?php

require_once __DIR__ . '/Shop.php';


class Product
{

    public $ID;
    public $name;
    public $price;
    public $in_stock; //(o vailable se mi semplifica la vita)

    public function __construct($name, $price, $in_stock = true)
    {
        $this->name = $name;
        $this->price = $price; //setPrice($price);
    }


    //public function setPrice($price)
    //{
    //  return $this->price = $price; //wtf?
    //}

    public function getProductPrice()
    {
        return '€' . $this->price;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }
}


$shiba_beef = new Product('Royak cani Maxi Adult 15 KG', 57.50);

echo $shiba_beef->name;

echo '<br>';

echo $shiba_beef->getProductPrice();
