<?php
require_once 'modele/Modele.php';
class Absence extends Modele {

// Renvoie la liste des absences associées à un éléve
public function getabsences($cneeleve) {
$sql = 'select matieres as mat, date as date, nbr_heure as nbh from abscence where cne=?';
$abs = $this->executerRequete($sql, array($cneeleve));
return $abs;
}
 // renvoie le total des absences par matière
public function totalabsence($cneeleve) {
$sql = 'select matieres, sum(nbr_heure) as nbh from abscence where cne=? group by matieres';
$abs2 = $this->executerRequete($sql, array($cneeleve));
return $abs2;
}

// Ajoute une absence à un élçve dans la base
public function ajouterabsence($matiere, $nombre_heure, $cneeleve) {
$sql = 'insert into abscence(matieres, date, nbr_heure, cne)'
. ' values(?, ?, ?, ?)';
$date = date(DATE_W3C); // Récupère la date courante
$this->executerRequete($sql, array($matiere, $date, $nombre_heure, $cneeleve));
}
}