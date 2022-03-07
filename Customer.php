<?php

require_once __DIR__ . '/Cart.php';
require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Order.php';
require_once __DIR__ . '/Shop.php';
class Customer
{
    //*PROPRIETÀ
    public $temporary_ID;
    public $cart;
    public $first_name;
    public $last_name;
    public $shipping_address;
    public $credit_card;
    public $orders;

    //*CONSTRUCTOR
    public function __construct()
    {
        $this->setTemporaryID();
        $this->setCart($this->temporary_ID);
        $this->orders = [];
    }

    //*SETTERS GETTERS
    //*ID
    public function setTemporaryID()
    {
        $this->temporary_ID = rand(10000, 99999);
    }
    //*CART
    public function setCart($ID)
    {
        $this->createCart($ID);
    }
    public function getCart()
    {
        return $this->cart;
    }
    public function createCart($ID)
    {
        $this->cart = new Cart($ID);
    }
    //*CLIENT INFO
    public function setClientInfo($first_name, $last_name, $shipping_address, $card_holder, $card_number, $month, $year)
    {
        //TODO:controllo correttezza info cliente
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->shipping_address = $shipping_address;
        $this->setCreditCard($card_number, $card_holder, $month, $year);
    }
    //*CREDIT CARD
    public function setCreditCard(int $card_number, $card_holder, int $month, int $year)
    {
        $this->credit_card = new CreditCard($card_number, $card_holder, $month, $year);
    }
    //*ORDER

    //*ALTRE FUNZIONI

    //*PURCHASE
    //funzione purchase(cart)(ma dove?)
    //allora purchase va fatto qui perchè posso accedere anche alla carta
    public function purchase($shop, $first_name, $last_name, $shipping_address, $card_holder, $card_number, $month, $year)
    {
        //inserire info
        $this->setClientInfo($first_name, $last_name, $shipping_address, $card_holder, $card_number, $month, $year);

        if (!count($this->cart->products)) { //se il carrello non contiene almeno un prodotto
            //errore
        } else if (!$this->credit_card->valid) { //se la carta non è valida(carta è valida dove?)
            //altro errore
        } else if (!$this->credit_card->solvent) { //se la carta non è solvente
            //altro errore
        } else { //se tutto funziona
            //creare un ordine $client, $client_ID, $products, $order_total, $client_address
            $products = $this->cart->products;
            $total = $this->cart->total;
            //!ticket: lo sto sovrascrivendo ogni volta?
            $order = new Order($this, $this->temporary_ID, $products, $total, $this->shipping_address);
            $this->orders[$order->order_ID] = $order;

            //aggiornare le quantità in stock
            foreach ($this->cart->products as $product) {
                //nell' inventario
                $shop->inventory[$product->product_ID]['Stock'] -= 1;
                //nella proprietà dell' oggetto stesso
                $product->setInStock($shop->inventory[$product->product_ID]['Stock']);
            }

            //svuotare il carrello
            $this->cart->products = [];
            $this->cart->total = 0;

            //carta + 1 acquisti
            $this->credit_card->purchases += 1;
        }
    }
}


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
