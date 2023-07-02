<?php
namespace App\Banque;

use App\Client\Compte as CompteClient;

/**
 * Objet Compte bancaire
 */
// Déclaration de ma classe "Compte"
abstract class Compte
{
    // Propriétés
    /**
     * Titulaire du compte
     *
     * @var CompteClient
     * 
     */
    private CompteClient $titulaire;

    /**
     * Solde du compte
     *
     * @var float
     */
    protected float $solde; // On remplace "private" par "protected", du coup la propriété est accessible en écriture depuis les classes enfants

    
    // Fonction magique qui est le constructeur de notre fonction
    /**
     * Constructeur du compte bancaire
     *
     * @param CompteClient $Compte Compte client du titulaire
     * @param float $montant Montant du solde à l'ouverture
     */
    public function __construct(CompteClient $compte, float $montant = 100) 
    {
        // On attribut le nom à la propriété titulaire de l'instance créée.
        $this->titulaire = $compte;

        // On attribut le montant à la propriété solde
        // On accède à une constantre privée par l'intermiédiaire de "self" self étant le nom de la classe
        $this->solde = $montant;

    }
    /**
     * Méthode magique pour la conversion en chaîne de caractères
     *
     * @return string
     */
    public function __toString()
    {
        return "Vous visualisez le compte {$this->titulaire} le solde est de {$this->solde} euros";
    }

    // Accesseurs
    /**
     * Getter de Titulaire - Retourne la valeur du titulaire du compte
     *
     * @return CompteClient
     */
    public function getTitulaire(): CompteClient
    {
        return $this->titulaire;
    }
    /**
     * Modifie le compte du titulaire et retourne l'objet
     *
     * @param CompteClient $compte Compte client du titulaire
     * @return Compte Compte bancaire
     */
    public function setTitulaire(CompteClient $compte): self //Retour l'objet lui-même
    {
        // On vérifie si on a un titulaire
        if (isset($compte)){
            $this->titulaire = $compte;
        }
        return $this;
    }

    /**
     * Retourne le solde du compte
     *
     * @return float Solde du compte
     */
    public function getSolde(): float
    {
        return $this->solde;
    }

    /**
     * Modifie le solde du compte
     *
     * @param float $montant Montant du solde
     * @return Compte Compte bancaire
     */
    public function setSolde(float $montant): self
    {
        if ($montant >= 0) {
            $this->solde = $montant;
        }
        return $this;
    }


    /**
     * Déposer de l'argent sur le compte
     *
     * @param float $montant Montant déposé
     * @return void
     */
    public function deposer(float $montant)
    {
        // On vérifie si le montant est positif
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }
    /**
     * Retourne une chaine de caractères affichant le solde
     *
     * @return string
     */
    public function voirSolde()
    {
        // echo "Le solde du compte est de $this->solde euros";
        return "Le solde du compte est de $this->solde euros";
    }

    /**
     * Retire un montant du solde du compte
     *
     * @param float $montant Montant à retirer
     * @return void
     */
    public function retirer(float $montant)
    {
        // On ne peut pas retirer plus que ce qu'on a
        // On ne peut pas retirer un montant négatif
        // On vérifie donc le montant et le solde
        if ($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
        }else {
            echo "Montant invalide ou solde insuffisant";
        }
    }



}