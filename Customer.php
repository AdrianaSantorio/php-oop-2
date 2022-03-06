<?php

require_once __DIR__ . '/Cart.php';
require_once __DIR__ . '/CreditCard.php';
class Customer
{
    public $temporary_ID;
    public $cart;
    public $first_name;
    public $last_name;
    public $shipping_address;
    public $credit_card;

    public function __construct()
    {
        $this->setTemporaryID();
        $this->createCart($this->temporary_ID);
    }

    public function setTemporaryID()
    {
        $this->temporary_ID = rand(10000, 99999);
    }

    public function createCart($ID)
    {
        $this->cart = new Cart($ID);
    }


    public function setClientInfo($first_name, $last_name, $shipping_address, $card_number, $card_holder, $month, $year, $solvent)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->shipping_address = $shipping_address;
        //#trait?
        $this->setCreditCard($card_number, $card_holder, $month, $year, $solvent);
    }

    public function setCreditCard(int $card_number, $card_holder, int $month, int $year, bool $solvent)
    {
        $this->credit_card = new CreditCard($card_number, $card_holder, $month, $year, $solvent);
    }


    //funzione purchase(cart)(ma dove?)
    public function purchase()
    {
        //allora purchase va fatto qui perchè posso accedere anche alla carta
        if (!count($this->cart)) {


            //se il carrello contiene qualcosa
            //se la carta è valida(carta è valida dove?)
            //se la carta è solvente

            //applicare sconto

            //come si restituisce errore?

            //togliere i soldi del totale del carrello dalla carta 

            //aggiungere cart product a order product (classe order)
            //svuotare carrello




        }
    }
}


$pippo = new Customer;

var_dump($pippo);
