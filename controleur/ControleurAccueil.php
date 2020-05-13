<?php
require_once 'modele/eleve.php';
require_once 'vue/Vue.php';
class ControleurAccueil {
private $eleve;
public function __construct() {
$this->eleve = new Eleve();
}
// Affiche la liste de tous les eleves
public function accueil() {
$eleves= $this->eleve->geteleves();
$vue = new Vue("Accueil");
$vue->generer(array('eleves' => $eleves));
}
}