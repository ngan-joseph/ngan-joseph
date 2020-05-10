<?php
//Retourne la liste des eleves de la table
function getEleves(){
       $bdd = getBdd();
       $eleves = $bdd->query('select cne,nom,prenom,etat,Photo from eleves');
       return $eleves;
   }
//Permet la création àla base de données et retourne l'objet PDO associé
function getBdd() {
$bdd = new PDO('mysql:host=localhost;dbname=ensa;charset=utf8',
'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
return $bdd;
}
// Renvoie les informations sur un eleve
function geteleve($cne) {
$bdd=getBdd();
$eleve=$bdd->prepare('select cne,nom,prenom,etat,Photo
from  eleves  where  cne=?');
$eleve->execute(array($cne)); 
if($eleve->rowCount()  ==1)
return  $eleve->fetch();  //accès  à  la  première  ligne  du  résultat
else
throw  new  Exception("Aucun  eleve  ne  correspond  a  l  identifiant  '$cne'");
}
//  Renvoie  la  liste  des  absences  associées  à  un  élève 
function  getabsences($cne){
$bdd=getBdd();
$absences=$bdd->prepare('select  matieres,date,nbr_heure
from  abscence  where  cne=?');
$absences->execute(array($cne));
return  $absences;
}
//renvoie  le  total  des  absences  par  matière 
function  totalabsence($cne){
$bdd=getBdd();
$absences=$bdd->prepare('select  matieres,  sum(nbr_heure) as nbr_heure from  abscence  where  cne=?  
	group  by  matieres');
$absences->execute(array($cne)); 
return  $absences;
}

 ?>     
 