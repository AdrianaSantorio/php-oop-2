<?php

class CreditCard
{
    //*PROPRIETÀ
    public $card_number;
    public $expiration_date;
    public $card_holder;
    public bool $solvent;
    public $purchases;
    public $valid;

    //*COSTRUTTORE
    public function __construct(int $card_number, $card_holder, int $month, int $year)
    {
        $this->setCardNumber($card_number);
        $this->setExpirationDate($month, $year);
        $this->card_holder = $card_holder;
        $this->solvent = true;
        $this->purchases = 0;
    }

    //TODO: controllo sul nome

    //*CARD NUMBER
    public function setCardNumber($card_number)
    {
        //se la stringa è lunga 16 caratteri ok altrimenti errore
        if (!is_numeric($card_number) || (strlen(strval($card_number)) != 16)) {
            //errore
            //TODO:gestire gli errori
        } else {
            $this->card_number = strval($card_number);
        }
    }

    //*EXPIRATION DATE
    public function setExpirationDate($month, $year)
    {
        $month_is_valid = false;
        $year_is_valid = false;

        if (!is_numeric($month) || $month < 1 || $month > 12) {
            //errore
        } else {
            $month_is_valid = true;
        }

        if (!is_numeric($year) || (strlen(strval($year)) != 4)) {
            //errore
        } else {
            $year_is_valid = true;
        }

        if ($month_is_valid && $year_is_valid) {
            $this->expiration_date = "{$month}/{$year}";
            $this->setValidity($month, $year);
        }
    }

    public function getExpirationDate()
    {
        return $this->expiration_date;
    }

    //*VALIDITY
    public function setValidity($month, $year)
    {
        $current_year = idate('Y');
        $current_month = idate('m');

        if ($year > $current_year && !($year > ($current_year + 5))) {
            $this->valid = true;
        } else if ($year < $current_year) {
            $this->valid = false;
        } else if ($year = $current_year) {
            if (($month >= $current_month)) {
                $this->valid = true;
            } else {
                $this->valid = false;
            }
        }
    }

    public function getValidity()
    {
        return $this->valid;
    }
}
