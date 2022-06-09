<?php
require_once __DIR__ . '/Classes/UserPremium.php';
require_once __DIR__ . '/Classes/CartaCredito.php';
require_once __DIR__ . '/Classes/Product.php';

// ---- UTENTI STANDARD ----
$utente1 = new User('Mario', 'Mariotti', 'm.mariotti@gmail.com', 'Viale dei pazzi, 15');
// var_dump($utente1);

$utente2 = new User('Michele', 'Minervi', 'm.minervii@gmail.com', 'Viale dei frati, 25');
// var_dump($utente2);


// -----UTENTI PREMIUM-----
$utentePremium1 = new UserPremium('Gianluca', 'Monaldi', 'g.monaldi@gmail.com', 'Viale dei meloni, 22');
// var_dump($utentePremium1);

$utentePremium2 = new UserPremium('Laura', 'Sinalefe', 'l.sinalefe@gmail.com', 'Viale delle rane, 29');
// var_dump($utentePremium2);

// ----CARTE DI CREDITO----
$cartaCredito1 = new CartaCredito('Visa', 123456789312, 333);
$cartaCredito1->setDataScadenza("2022-06-20");
// var_dump($cartaCredito1);

$cartaCredito2 = new CartaCredito('MasterCard', 123546789662, 313);
$cartaCredito2->setDataScadenza("2022-05-20");
// var_dump($cartaCredito2);

$cartaCredito3 = new CartaCredito('Postepay', 12345678555, 122);
$cartaCredito3->setDataScadenza("2023-08-30");
// var_dump($cartaCredito3);

$cartaCredito4 = new CartaCredito('Payoneer', 123451219312, 555);
$cartaCredito4->setDataScadenza("2020-03-13");
// var_dump($cartaCredito4);

// ASSEGNAZIONE CARTE DI CREDITO
$utente1->setCartaCredito($cartaCredito1);
// var_dump($utente1);

$utente2->setCartaCredito($cartaCredito2);
// var_dump($utente2);

$utentePremium1->setCartaCredito($cartaCredito3);
// var_dump($utentePremium1);

$utentePremium2->setCartaCredito($cartaCredito4);
// var_dump($utentePremium2);

// ---- PRODOTTI ----
$prodotto1 = new Product('Cibo', 'Crocchette', 'Friskies', 'Gatto', 12.99);

$prodotto2 = new Product('Cibo', 'Crocchette', 'Royal Canin', 'Cane', 20.99);

$prodotto3 = new Product('Cibo', 'Scatolette', 'Tartafood', 'Tartarughe', 30.00);

$prodotto4 = new Product('Giochi', 'Tiragraffi', 'WeFine', 'Gatto', 50.00);

$prodotto4 = new Product('Accessori', 'Guinzaglio', 'Doggo', 'Cane', 24.00);

$prodotto5 = new Product('Accessori', 'Cuccia', 'LittleHome', 'Cane', 60.00);

$prodotto6 = new Product('Giochi', 'Palla', 'LionBall', 'Leone', 15.00);

// PRODOTTI ACQUISTATI 
$utente1->setProdottoAcquistato($prodotto1);
$utente1->setProdottoAcquistato($prodotto2);
$utente1->setProdottoAcquistato($prodotto4);
// var_dump($utente1);

$utente2->setProdottoAcquistato($prodotto3);
// var_dump($utente2);

$utentePremium1->setProdottoAcquistato($prodotto4);
$utentePremium1->setSconto();
// var_dump($utentePremium1);

$utentePremium2->setProdottoAcquistato($prodotto5);
$utentePremium2->setProdottoAcquistato($prodotto6);
$utentePremium2->setSconto();
// var_dump($utentePremium2);

// try {
//     $cartaCredito2->setDataScadenza("2023-05-30");
// } catch (Exception $e) {
//     echo 'Eccezione: ' . $e->getMessage();
// }
// try {
//     $cartaCredito4->setDataScadenza("2022 - 05 - 19");
// } catch (Exception $e) {
//     echo 'Eccezione: ' . $e->getMessage();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
</head>

<body>
    <div class="products">
        <h1>PRODOTTI ACQUISTATI</h1>
        <h2>UTENTI STANDARD</h2>
        <h3><?php echo $utente1->getNome() . '  ' . $utente1->getCognome() ?></h3>
        <h4><?php echo $utente1->getEmail() . ' - ' . $utente1->getIndirizzo() . ' - Scadenza carta di credito: ' . $cartaCredito1->getDataScadenza() ?></h4>
        <ul>
            <?php foreach ($utente1->getProdottoAcquistato() as $prodotto) { ?>
                <li><?php echo $prodotto->getCategory() . ' - ' . $prodotto->getType() . ' - ' . $prodotto->getMarca() . ' - ' . $prodotto->getAnimale() . ' - Prezzo intero: ' . $prodotto->getPrice() . '&euro;'  ?></li>
            <?php } ?>
        </ul>
        <h3><?php echo $utente2->getNome() . '  ' . $utente2->getCognome() ?></h3>
        <h4><?php echo $utente2->getEmail() . ' - ' . $utente2->getIndirizzo() . ' - Scadenza carta di credito: ' . $cartaCredito2->getDataScadenza() ?></h4>
        <ul>
            <?php foreach ($utente2->getProdottoAcquistato() as $prodotto) { ?>
                <li><?php echo $prodotto->getCategory() . ' - ' . $prodotto->getType() . ' - ' . $prodotto->getMarca() . ' - ' . $prodotto->getAnimale() . ' - Prezzo intero: ' . $prodotto->getPrice() . '&euro;'  ?></li>
            <?php } ?>
        </ul>
        <hr>
        <h2>UTENTI PREMIUM</h2>
        <h3><?php echo $utentePremium1->getNome() . '  ' . $utentePremium1->getCognome() ?></h3>
        <h4><?php echo $utentePremium1->getEmail() . ' - ' . $utentePremium1->getIndirizzo() . ' - Scadenza carta di credito: ' . $cartaCredito3->getDataScadenza() ?></h4>
        <ul>
            <?php foreach ($utentePremium1->getProdottoAcquistato() as $prodotto) { ?>
                <li><?php echo $prodotto->getCategory() . ' - ' . $prodotto->getType() . ' - ' . $prodotto->getMarca() . ' - ' . $prodotto->getAnimale() . ' - Prezzo intero: ' . $prodotto->getPrice() . '&euro;' . ' - Prezzo scontato: ' . ($prodotto->getTotale()) . '&euro;'  ?></li>
            <?php } ?>
        </ul>
        <h3><?php echo $utentePremium2->getNome() . '  ' . $utentePremium2->getCognome() ?></h3>
        <h4><?php echo $utentePremium2->getEmail() . ' - ' . $utentePremium2->getIndirizzo() . ' - Scadenza carta di credito: ' . $cartaCredito4->getDataScadenza() ?></h4>
        <ul>
            <?php foreach ($utentePremium2->getProdottoAcquistato() as $prodotto) { ?>
                <li><?php echo $prodotto->getCategory() . ' - ' . $prodotto->getType() . ' - ' . $prodotto->getMarca() . ' - ' . $prodotto->getAnimale() . ' - Prezzo intero: ' . $prodotto->getPrice() . '&euro;' . ' - Prezzo scontato: ' . ($utentePremium2->getTotale()) . '&euro;'    ?></li>
            <?php } ?>
        </ul>
    </div>
</body>

</html>