<?php

require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/Cart.php';

class RegisteredCustomer extends Customer
{
    public $clientID;
    public $loyaltyPoint;
    public $discount;
    public $registeredCards;
    public $registeredAddress;
    public $orders;



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


    //success, add points

    //funzione add points
    //this cart total 







}
