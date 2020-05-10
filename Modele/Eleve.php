<?php
require_once 'Modele/Modele.php'; 
class  Eleve  extends  Modele  {
//Retourne la liste des eleves de la table
public function getEleves(){
$sql  =  'select cne,nom,prenom,etat,Photo from eleves';
$eleves=$this->executerRequete($sql);
 return  $eleves;
}

// Renvoie les informations sur un eleve
public function geteleve($cne) {
$sql='select cne,nom,prenom,etat,Photo
from  eleves  where  cne=?';
$eleve=$this->executerRequete($sql,  array($cne)); 
if($eleve->rowCount()  ==1)
return  $eleve->fetch();  //accès  à  la  première  ligne  du  résultat else
throw  new  Exception("Aucun  eleve  ne  correspond  a  l  identifiant  '$cne'");
}

//Mets à jour l'etat d'un eleve
public function update_etat($cne,$etat){
	$sql='update eleves set etat='.$etat.' where cne='.$cne.'';
	$act = $this->executerRequete($sql);
}
}    