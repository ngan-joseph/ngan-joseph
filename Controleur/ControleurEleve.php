<?php
require_once 'Modele/Eleve.php';
require_once 'Modele/Absence.php';
require_once 'Vue/vue.php';
class ControleurEleve {
private $eleve;
private $abs;
public function __construct() {
$this->eleve = new Eleve();
$this->abs = new Absence();
}
// Affiche les détails sur un élève
public function eleve($cne) {
$eleve = $this->eleve->geteleve($cne);
$abs = $this->abs->getabsences($cne);
$abs2=$this->abs->totalabsence($cne);
$vue = new Vue("Eleve");
$vue->generer(array('eleve' => $eleve, 'abs' => $abs, 'abs2' => $abs2));
}

// Ajoute une absence à un eleve
public function ajouter($matiere, $nombre_heure, $cne) {
// Sauvegarde de l'absence
$this->abs->ajouterabsence($matiere, $nombre_heure, $cne);
// Actualisation de l'affichage de l'eleve
$this->eleve($cne);
}

public function update_etat($cne,$etat){
	$this->eleve->update_etat($cne,$etat);
}
}