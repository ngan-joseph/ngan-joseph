<?php
require  'Modele/Modele.php';
//  Affiche  la  liste  de  tous  les  élèves 
function  accueil()  {
$eleves  =  geteleves(); 
require  'Vue/vueAccueil.php';
}
//  Affiche  les  détails  sur  un  élève 
function  eleve($cne)  {
$eleve  =  geteleve($cne);
$abs=getabsences($cne);
$abs2=totalabsence($cne); 
require  'Vue/vueEleve.php';
}
// Affiche une erreur 
function  erreur($msgErreur)  { 
	require  'Vue/vueErreur.php';
}
