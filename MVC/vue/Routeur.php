<?php
require_once 'controleur/ControleurAccueil.php';
require_once 'controleur/ControleurEleve.php';
require_once 'vue/Vue.php';
class Routeur {
private $ctrlAccueil;
private $ctrlEleve;
public function __construct() {
$this->ctrlAccueil = new ControleurAccueil();
$this->ctrlEleve = new ControleurBillet();
}
// Traite une requête entrante
public function routerRequete() {
try {
if (isset($_GET['action'])) {
if ($_GET['action'] == 'Eleve') {
if (isset($_GET['id'])) {
$cneeleve = intval($_GET['id']);
if ($cneeleve != 0) {
$this->ctrlEleve->eleve($cneeleve);
}
else
throw new Exception("Identifiant d eleve non valide");
}
else
throw new Exception("Identifiant d eleve non défini");
}
else
throw new Exception("Action non valide");
}