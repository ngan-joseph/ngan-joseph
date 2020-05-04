<?php
require_once 'modele/eleve.php';
require_once 'modele/Absence.php';
require_once 'vue/Vue.php';
class ControleurEleve {
private $eleve;
private $abs;
public function __construct() {
$this->eleve = new Eleve();
$this->abs = new Absence();
}
// Affiche les détails sur un élève
public function eleve($cneeleve) {
$eleve = $this->eleve->geteleve($cneeleve);
$abs = $this->abs->getabsences($cneeleve);
$abs2=$this->abs->totalabsence($cneeleve);
$vue = new Vue("Eleve");
$vue->generer(array('eleve' => $eleve, 'abs' => $abs, 'abs2' => $abs2));
}

// Ajoute une absence à un eleve
public function ajouter($matiere, $nombre_heure, $cneeleve) {
// Sauvegarde de l'absence
$this->abs->ajouterabsence($matiere, $nombre_heure, $cneeleve);
// Actualisation de l'affichage de l'eleve
$this->eleve($cneeleve);
}

public function activer_desactiver($cneeleve,$etat){
	$this->eleve->activer_desactiver($cneeleve,$etat);
}
public function inserer($cneeleve,$nom,$prenom,$etat,$photo){
	$this->eleve->Inserer($cneeleve,$nom,$prenom,$etat,$photo);
}
}