<?php
class Absence extends Modele{
//  Renvoie  la  liste  des  absences  associées  à  un  élève 
public function  getabsences($cne){
$sql = 'select matieres as mat, date as date, nbr_heure as nbh from abscence where cne=?';
$abs = $this->executerRequete($sql, array($cne));
return  $abs;
}
//renvoie  le  total  des  absences  par  matière 
public function  totalabsence($cne){
$sql = 'select matieres, sum(nbr_heure) as nbh from abscence where cne=? group by matieres';
$abs2 = $this->executerRequete($sql, array($cne));
return $abs2;
}
// Ajoute une absence à un éleve dans la base
public function ajouterabsence($matiere, $nombre_heure, $cne) {
$sql = 'insert into abscence(matieres, date, nbr_heure, cne)'
. ' values(?, ?, ?, ?)';
$date = date(DATE_W3C); // Récupère la date courante
$this->executerRequete($sql, array($matiere, $date, $nombre_heure, $cne));
}
}




