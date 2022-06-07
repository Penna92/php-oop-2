<?php
require_once __DIR__ . '/Classes/UserPremium.php';
require_once __DIR__ . '/Classes/CartaCredito.php';

$utente1 = new User('Mario', 'Mariotti', 'm.mariotti@gmail.com', 'Viale dei pazzi, 15');
$utente1->SetSconto(false);
var_dump($utente1);

$utente2 = new User('Michele', 'Minervi', 'm.minervii@gmail.com', 'Viale dei frati, 25');
$utente2->setSconto(true);
var_dump($utente2);
// var_dump($setSconto);


$utentePremium1 = new UserPremium('Gianluca', 'Monaldi', 'g.monaldi@gmail.com', 'Viale dei giardini, 20');
var_dump($utentePremium1);

$cartaCredito1 = new CartaCredito('Visa', 123456789312, 333, "20-06-2022");
var_dump($cartaCredito1);
