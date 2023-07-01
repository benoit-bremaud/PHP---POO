<?php
use App\Client\Compte as CompteClient;
use App\Banque\{CompteCourant, CompteEpargne, CompteEpargneCourant};
// use App\Banque\CompteEpargne;

require_once 'classes/Banque/Compte.php';
require_once 'classes/Banque/CompteCourant.php';
require_once 'classes/Banque/CompteEpargne.php';
require_once 'classes/Banque/CompteEpargneCourant.php';
require_once 'classes/Client/Compte.php';

// On instancie le compte
$compte1 = new CompteCourant('Benoit', 500, 200);
$compte1->retirer(200);
var_dump($compte1);

$compteEpargne = new CompteEpargneCourant('Robert', 200, 10, 200);

var_dump($compteEpargne);

$compteEpargne->verserInterets();
$compteEpargne->retirer(300)
;
var_dump($compteEpargne);

// $client = new App\Client\Compte;
$client = new CompteClient;

var_dump($client);
