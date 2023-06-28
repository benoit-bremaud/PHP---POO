<?php
require_once "classes/Compte.php";

// On instancie le compte
$compte1 = new Compte;

// On écrit dans la propriété titulaire
$compte1->titulaire = "Benoit";

// On écrit dans la propriété solde
$compte1->solde = 500;

var_dump($compte1);

// On créé une nouvelle instance
$compte2 = new Compte;

$compte2->titulaire = "Robert";

$compte2->solde = 389.25;

var_dump($compte2);