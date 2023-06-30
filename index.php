<?php
require_once "classes/Compte.php";
require_once 'classes/CompteCourant.php';
require_once 'classes/CompteEpargne.php';
require_once 'classes/CompteEpargneCourant.php';

// On instancie le compte
$compte1 = new CompteCourant('Benoit', 500, 200);
$compte1->retirer(200);
var_dump($compte1);

$compteEpargne = new CompteEpargneCOurant('Robert', 200, 10, 200);

var_dump($compteEpargne);

$compteEpargne->verserInterets();
$compteEpargne->retirer(300)
;
var_dump($compteEpargne);
