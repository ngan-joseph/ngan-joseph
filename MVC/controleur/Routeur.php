<?php
require_once 'controleur/ControleurAccueil.php';
require_once 'controleur/ControleurEleve.php';
require_once 'vue/Vue.php';
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
	$cneeleve = intval($this->getParametre($_GET, 'cne'));
if ($cneeleve != 0) {
$this->ctrlEleve->eleve($cneeleve);
}
else
throw new Exception("Identifiant d eleve non valide");
}
else if ($_GET['action'] == 'ajouter') {
$matiere = $this->getParametre($_POST, 'matiere');
$nombre_heure = $this->getParametre($_POST, 'nombre_heure');
$cneeleve = $this->getParametre($_POST, 'cne');
$this->ctrlEleve->ajouter($matiere, $nombre_heure, $cneeleve);
}
else if ($_GET['action'] == 'activer') {
$cneeleve = $this->getParametre($_GET, 'cne');
$etat = $this->getParametre($_GET,'etat'); 
$this->ctrlEleve->activer_desactiver($cneeleve,$etat);
$this->ctrlAccueil->accueil();
}
else if ($_GET['action'] == 'inserer') {
$nom = $this->getParametre($_POST, 'nom');
$prenom = $this->getParametre($_POST, 'prenom');
$cneeleve = $this->getParametre($_POST, 'cne');
$photo = "photos/inconnu.jpeg";
$etat= "1";
$this->ctrlEleve->inserer($cneeleve, $nom, $prenom, $etat, $photo);
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