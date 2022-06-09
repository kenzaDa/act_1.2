<?php
require_once 'Compte.php';
// Class CompteEpargne fille de class Compte
class CompteEpargne extends Compte {
    private static float $TauxInteret=0.06;
 //  fonction qui calcule le taux d'interet  
    public function CalculInteret() 
    {
       return $this->solde = $this->solde+($this->solde*self ::$TauxInteret);
    }
    
}

?>
