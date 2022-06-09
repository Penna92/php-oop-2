<?php
require_once __DIR__ . '/User.php';
class UserPremium extends User
{
    // protected $subscription = true;
    protected $sconto;


    // function __construct($_nome, $_cognome, $_email, $_indirizzo)
    // {
    // parent::__construct($_nome, $_cognome, $_email, $_indirizzo);
    //     // $this->subscription = $_subscription;
    // $this->sconto = $_sconto;
    // }
    // public function getSubscription()
    // {
    //     return $this->subscription;
    // }
    // public function setSubscription($_subscription)
    // {
    //     $this->subscription = $_subscription;
    // }

    public function setSconto()
    {
        $this->sconto = 20;
    }
    public function getTotale(){
        $totale = 0;
        foreach($this->prodotto_acquistato as $prodotto) {
            $totale += $prodotto->price;
        }
        $totale = $totale * $this->sconto / 100;
        var_dump($totale);
        return $totale;
    }

    // {
    //     if (
    //         $subscription == true
    //     ) {
    //         $this->sconto = 20;
    //     } else {
    //         $this->sconto = 0;
    //     }
    // }
    // public function getSconto()
    // {
    //     return $this->sconto;
    // }
}
