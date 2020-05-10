<?php
require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurEleve.php';
require_once 'Vue/vue.php';
class Routeur {
private $ctrlAccueil;
private $ctrlEleve;
public function __construct() {
$this->ctrlAccueil = new ControleurAccueil();
$this->ctrlEleve = new ControleurEleve();
}
// Traite une requête entrante
public function routerRequete() {
try {
if (isset($_GET['action'])) {
if ($_GET['action'] == 'eleve') {
	$cneeleve = intval($_GET['cne']);
if ($cneeleve != 0) {
$this->ctrlEleve->eleve($cneeleve);
}
else
throw new Exception("Identifiant d eleve non valide");
}
else if ($_GET['action'] == 'ajouter') {
$matiere = $this->getParametre($_POST, 'matiere');
$nombre_heure = $this->getParametre($_POST, 'nombre_heure');
$cne = $this->getParametre($_POST, 'cne');
$this->ctrlEleve->ajouter($matiere, $nombre_heure, $cne);
}
else if ($_GET['action'] == 'update') {
$cne = $this->getParametre($_GET, 'cne');
$etat = $this->getParametre($_GET,'etat'); 
$this->ctrlEleve->update_etat($cne,$etat);
$this->ctrlAccueil->accueil();
}
else
throw new Exception("Action non valide");
}
else { // aucune action définie : affichage de l'accueil
$this->ctrlAccueil->accueil();
}
}
catch (Exception $e) {
$this->erreur($e->getMessage());
}
}
// Affiche une erreur
private function erreur($msgErreur) {
$vue = new Vue("Erreur");
$vue->generer(array('msgErreur' => $msgErreur));
}
// Recherche un paramètre dans un tableau
private function getParametre($tableau, $nom) {
if (isset($tableau[$nom])) {
return $tableau[$nom];
}
else
throw new Exception("Paramètre '$nom' absent");
}
}