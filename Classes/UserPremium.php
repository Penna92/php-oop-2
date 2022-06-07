<?php
require_once __DIR__ . '/User.php';
class UserPremium extends User
{
    protected $subscription = true;
    // protected $sconto = 20;

    // function __construct($_nome, $_cognome, $_email, $_indirizzo)
    // {
    //     parent::__construct($_nome, $_cognome, $_email, $_indirizzo);
    //     // $this->subscription = $_subscription;
    //     // $this->sconto = $_sconto;
    // }
    // public function getSubscription()
    // {
    //     return $this->subscription;
    // }
    // public function setSubscription($_subscription)
    // {
    //     $this->subscription = $_subscription;
    // }
}
