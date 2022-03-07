<?php
class Product
{

    public $product_ID;
    public $name;
    public $price;
    public $barcode;
    public bool $in_stock; //(o available se mi semplifica la vita)

    public function __construct($name, $price, $barcode, $product_ID)
    {
        $this->name = $name;
        $this->price = $price;
        $this->barcode = $barcode;
        $this->setProductID($product_ID); //si può fare in modo più fico ma non lo so
        $this->in_stock = true; //TODO: instock dipende da inventory in shop
    }

    public function getProductPrice()
    {
        return '€' . $this->price;
    }

    public function setProductPrice($price)
    {
        $this->price = $price;
    }

    public function setProductID($product_ID)
    {
        $this->product_ID = $product_ID;
    }

    public function setInStock($stock)
    {
        if (!$stock) {
            $this->in_stock = false;
        } else {
            $this->in_stock = true;
        }
    }
}
