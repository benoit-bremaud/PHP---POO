<?php
/**
 * Objet Compte bancaire
 */
// Déclaration de ma classe "Compte"
class Compte // Déclaration de l'objet
{
    // Propriétés
    /**
     * Titulaire du compte
     *
     * @var string
     */
    public $titulaire;
    /**
     * Solde du compte
     *
     * @var float
     */
    public $solde;

    // Fonction magique qui est le constructeur de notre fonction
    /**
     * Constructeur du compte bancaire
     *
     * @param string $nom Nom du titulaire
     * @param float $montant Montant du solde à l'ouverture
     */
    public function __construct(string $nom, float $montant = 100) 
    {
        // On attribut le nom à la propriété titulaire de l'instance créée.
        $this->titulaire = $nom; // On injecte le nom dans la propriété "titulaire"

        // On attribut le montant à la propriété solde
        $this->solde = $montant;
    }

}