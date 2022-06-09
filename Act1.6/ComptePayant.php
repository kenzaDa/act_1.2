<?php
require_once 'Compte.php';
// Class ComptePayant fille de class Compte
class ComptePayant extends Compte {
    private static float $TauxRetrait=2;
//  fonction qui retire 2euros sur chaque retrait  
    public function retirer($montant) 
    {
        if($montant > 0 && $this->solde >= ($montant+2)){
            $this->solde -= ($montant+2);
        }else{
            echo "Montant invalide ou solde insuffisant";
        }
    
}}

?>
