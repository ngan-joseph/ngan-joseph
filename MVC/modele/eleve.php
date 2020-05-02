<?php
require_once 'Modele/Modele.php';
class Eleve extends Modele {
// Renvoie la liste des eleves de la base de données
public function geteleves() {

    $sql = 'select * from eleves';
    $eleves = $this->executerRequete($sql);
    return $eleves;
}

// Renvoie les informations sur un eleve
public function geteleve($cneeleve) {
$sql = 'select cne ,nom,prenom,etat,Photo from eleves where cne=?';
$eleve = $this->executerRequete($sql, array($cneeleve));
if ($eleve->rowCount() == 1)
return $eleve->fetch(); // Accès à la première ligne de résultat
else
throw new Exception("Aucun eleve ne correspond à l'identifiant '$cneeleve'");
}

public function activer_desactiver($cneeleve,$etat){
	$sql='update eleves set etat='.$etat.' where cne='.$cneeleve.'';
	$act = $this->executerRequete($sql);
}
}