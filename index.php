<?php
/*
-es1

Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; 
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. 
Strutturare le classi gestendo l'ereditarietà dove necessario; 
ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi,
oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, 
l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS: 
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).

-es2
Continuando l'esercizio di ieri (php-oop-2), andiamo ad implementare la gestione degli errori all'interno delle nostre classi.
Nei set delle varie variaibli, controlliamo che i dati inseriti siano validi (accetto campi null? è di tipo stringa? email è valida? età è di tipo numero?)
Bonus:
Pensare a come includere un Trait che valga la pena usare tra più classi.

*/
 

try{
    require_once "./classes/products/smartphoneProduct.php";
    require_once "./classes/customers/primeCustomer.php";
    require_once "./classes/payments/creditCard.php";
    require_once "./classes/payments/bankTransfer.php";
    require_once "./classes/cart.php";
    require_once "./classes/utilities.php";

}catch(Exception $e){
    echo 'Eccezione" ' . $e->getMessage();
}

$customer = new PrimeCustomer('Mario Rossi', "mario@gmail.com", 18);
$cart = new Cart($customer);
$creditCard = new CreditCard(1111222233334444, '05/2025', 324);

$bonificoSepa = new BankTransfer('ciao');
var_dump($bonificoSepa);

$phone = new SmartphoneProduct('iPhone', 1, 980, 'X', 'Apple');
$xiaomi10 = new SmartphoneProduct("redmi", 1, 560, "10 Max", "Xiaomi");

$cart -> addProduct($phone);
$cart-> addProduct($xiaomi10);


var_dump($cart);
