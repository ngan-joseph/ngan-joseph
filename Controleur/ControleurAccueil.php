<?php
require_once 'Modele/Eleve.php';
require_once 'Vue/vue.php';
class ControleurAccueil {
private $eleve;
public function __construct() {
$this->eleve = new Eleve();
}
// Affiche la liste de tous les eleves
public function accueil() {
$eleves= $this->eleve->getEleves();
$vue = new Vue("Accueil");
$vue->generer(array('eleves' => $eleves));
}
}