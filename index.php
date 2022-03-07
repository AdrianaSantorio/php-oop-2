<?php

require_once __DIR__ . '/Cart.php';
require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/RegisteredCustomer.php';
require_once __DIR__ . '/Order.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Shop.php';


$shiba_beef = new Product('Royal cani Maxi Adult 15 KG', 57.50, '3855679', '1');

echo $shiba_beef->name;

echo '<br>';

echo $shiba_beef->getProductPrice();

var_dump($shiba_beef);

$my_card = new CreditCard(7826291037482918, 'Adriana Santorio', 02, 2025);

var_dump($my_card);

$another_card = new CreditCard(7826291037482918, 'Adriana Santorio', 03, 2022);

var_dump($another_card);

$pet_shop = new Shop;

$pet_shop->addProductToInventory($shiba_beef, 2);

var_dump($pet_shop);


$pippo = new Customer;

var_dump($pippo);

$pippo->cart->addToCart($shiba_beef);

var_dump($pippo->cart);

$pippo->cart->addToCart($shiba_beef);

echo 'CARRELLO pre';
var_dump($pippo->cart);
echo 'CC pre';
var_dump($pippo->credit_card);
echo 'PRODOTTO pre';
var_dump($shiba_beef);
echo 'INVENTARIO pre';
var_dump($pet_shop->inventory);
echo 'ORDERS pre';
var_dump($pippo->orders);


$pippo->purchase($pet_shop, 'Adriana', 'Santorio', 'Via dei matti n°0', 'Eduardo Santorio', 9382736482718273, 05, 2022);

echo 'CLIENTE post';
var_dump($pippo);
echo 'CARRELLO post';
var_dump($pippo->cart);
echo 'CC post';
var_dump($pippo->credit_card);
echo 'PRODOTTO post';
var_dump($shiba_beef);
echo 'INVENTARIO post';
var_dump($pet_shop->inventory);
echo 'ORDERS post';
var_dump($pippo->orders);
