<?php
namespace App\Banque;

use App\Client\Compte as CompteClient;
/**
 * Compte avec taux d'intérêts
 */
class CompteEpargne extends Compte
{
    /**
     * Taux d'intérêt du compte
     *
     * @var int
     */
    private $taux_interets;

    /**
     * Constructeur du compte épargne
     *
     * @param CompteClient $compte Compte Client du titulaire
     * @param float $montant Montant du solde à l'ouverture
     * @param integer $taux Taux d'intérêts
     * @return void
     */
    public function __construct(CompteClient $compte, float $montant, int $taux)
    {
        // On transfert les valeurs nécessaires au constructeur parent
        parent::__construct($compte, $montant);

        $this->taux_interets = $taux;
    }
    

    /**
     * Get taux d'intérêt du compte
     * 
     * @return int
     */
    public function getTauxInterets(): int
    {
        return $this->taux_interets;
    }

    /**
     * Set taux d'intérêt du compte
     * 
     * @return self
     */
    public function setTauxInterets(int $taux_interets): self
    {
        if ($taux_interets >= 0) {
            $this->taux_interets = $taux_interets;
        }
       
        return $this;
    }

    public function verserInterets()
    {
        $this->solde = $this->solde + ($this->solde * $this->taux_interets / 100);
    }
}