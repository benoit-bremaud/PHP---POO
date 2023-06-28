<?php
require_once "classes/Compte.php";

// On instancie le compte
// Il faut maintenant insérer le nom du titulaire
$compte1 = new Compte("Benoit", 500);

// On écrit dans la propriété titulaire
// Avec le constructeur, plus besoin maintenant
// $compte1->titulaire = "Benoit";

// On écrit dans la propriété solde
// $compte1->solde = "500";

// On dépose 100 euros
$compte1->deposer(100);

var_dump($compte1);

?>
<p><?= $compte1->voirSolde() ?></p>
<?php

// // On créé une nouvelle instance
// $compte2 = new Compte("Robert");

// // $compte2->titulaire = "Robert";

// $compte2->solde = 389.25;

// var_dump($compte2);