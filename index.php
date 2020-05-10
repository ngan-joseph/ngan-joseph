<?php 
require('Controleur/Controleur.php'); 
try {
if  (isset($_GET['action']))  {
if  ($_GET['action']  ==  'eleve')  {
if  (isset($_GET['cne']))  {
$cne  =  intval($_GET['cne']); 
if ($cne != 0)
eleve($cne); 
else
throw  new  Exception("Identifiant  de l'eleve  non  valide");
}
else
throw  new  Exception("Identifiant  de l'eleve  non  défini");
}
else
throw  new  Exception("Action  non  valide");
}
else {
accueil(); // action par défaut
}
}
catch  (Exception  $e)  { 
	erreur($e->getMessage());
}

