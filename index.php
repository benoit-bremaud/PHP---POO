<?php

use App\Autoloader;
use App\Client\Compte as CompteClient;
use App\Banque\{CompteCourant, CompteEpargne, CompteEpargneCourant};
// use App\Banque\CompteEpargne;

require_once 'classes/Autoloader.php';
Autoloader::register();


// On instancie le compte
$compte1 = new CompteCourant('Benoit', 500, 200);
// $compte2 = new CompteClient();

// $compte1->retirer(200);
var_dump($compte1);

// $compteEpargne = new CompteEpargneCourant('Robert', 200, 10, 200);

// var_dump($compteEpargne);

// $compteEpargne->verserInterets();
// $compteEpargne->retirer(300)
// ;
// var_dump($compteEpargne);

// // $client = new App\Client\Compte;
// $client = new CompteClient;

// var_dump($client);
