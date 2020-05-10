<?php
   require 'Modele.php';
 try{
   $eleves=getEleves();
require 'vueAccueil.php';
}
catch(Exception $e) {
$msgErreur=$e->getMessage();
require 'vueErreur.php';
}

