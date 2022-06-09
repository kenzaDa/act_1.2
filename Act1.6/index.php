<?php
require_once 'Compte.php';
require_once 'CompteEpargne.php';
require_once 'ComptePayant.php';
$compte1 = new Compte(600);
$compte2= new Compte();
var_dump ($compte1);
var_dump ($compte2);
$compte1-> voirCode();
 $CompteEp1=new CompteEpargne(100);
 $CompteEp1-> voirSolde();
 echo $CompteEp1-> CalculInteret(); 
 $CompteEp2=new ComptePayant(100);
 $CompteEp2-> voirSolde();
 $CompteEp2-> retirer(28);
 $CompteEp2-> voirSolde();
 $compte2-> voirCode();