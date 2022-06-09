<?php 
class Compte 
{
protected float $solde;
protected static int $codeinit=0;
protected int $code ;
public function __construct(float $solde=0)
{
    // On affecte le solde à la propriété solde et incrémente le code du compte
    $this ->code =  ++self:: $codeinit ;
    $this->solde = $solde;

}
// fonction qui ajoute un montant au solde du compte
public function deposer(float $montant)
{
    // On vérifie si le montant est positif
    if($montant > 0){
        $this->solde += $montant;
    }
}
// fonction qui retire un montant au solde du compte

public function retirer(float $montant)
{
    // On vérifie le montant et le solde
    if($montant > 0 && $this->solde >= $montant){
        $this->solde -= $montant;
    }else{
        echo "Montant invalide ou solde insuffisant";
    }
}

//fonction qui affiche le solde du compte
public function voirSolde()
{
    echo "Le solde du compte est de". number_format($this->solde,2,","," "). "€";
}
public function voirCode()
{
    echo "Le code du compte est ".$this->code;
}

}