<?php
require_once "classes/Compte.php";
require_once 'classes/CompteCourant.php';
require_once 'classes/CompteEpargne.php';

// On instancie le compte
$compte1 = new CompteCourant('Benoit', 500, 200);

$compte1->retirer(200);

var_dump($compte1);

$compteEpargne = new CompteEpargne('Robert', 200, 10);
var_dump($compteEpargne);

$compteEpargne->verserInterets();

var_dump($compteEpargne);
