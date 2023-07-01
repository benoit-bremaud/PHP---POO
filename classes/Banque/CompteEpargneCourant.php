<?php
namespace App\Banque;

class CompteEpargneCourant extends CompteEpargne
{
    private $decouvert;

    /**
     * Constructeur de compte courant
     *
     * @param string $nom Nom du titulaire
     * @param float $montant Montant du solde à l'ouverture
     * @param integer $decouvert Découvert autorisé
     */
    public function __construct(string $nom, float $montant, int $taux, int $decouvert)
    {
        // On transfère les informations nécessaires au construction de Compte
        parent::__construct($nom, $montant, $taux);

        $this->decouvert = $decouvert;
    }

    public function getDecouvert(): int
    {
        return $this->decouvert;
    }

    public function setDecouvert(int $montant): self
    {
        if ($montant >= 0) {
            $this->decouvert = $montant;
        }
        return $this;
    }


    public function retirer(float $montant)
    {
        // On va vérifier si le découvert permet le retrait
        if ($montant > 0 && $this->solde - $montant >= -$this->decouvert) {
            $this->solde -= $montant;
        }
        else {
            echo 'Solde insuffisant';
        }
    }

}