<?php $this->titre = "Gestion des eleves"; ?>
<h1>Liste des élèves</h1>
<table>
	<tr>
		<th>CNE</th>
		<th>NOM</th>
		<th>PRENOM</th>
		<th>ETAT</th>
        <th>PHOTO</th>
        <th>Détails</th>
	</tr>
<?php
foreach ($eleves as $eleve) {
	$et="";
	$lien="";
if($eleve["etat"]== 1)
{
$et="active";
$lien="index.php?action=update&cne=".$eleve["cne"]."&etat=0"; //On veut desactiver
}
else
{
$et="desactive";
$lien="index.php?action=update&cne=".$eleve["cne"]."&etat=1"; //On veut  activer
}
	?>
		<tr>
		<td><?php echo $eleve["cne"]; ?></td>
		<td><?php echo $eleve["nom"]; ?></td>
		<td><?php echo $eleve["prenom"]; ?></td>
		<td><a href="<?php echo $lien; ?>"><?php echo $et; ?></a></td>
		<td><img src="<?= $eleve["Photo"] ?>" width="80"></td>
		<td> <a href="<?= "index.php?action=eleve&cne=" . $eleve['cne'] ?>">
			<button>Details</button></a>
		</td>
	</tr>
	<?php
	
}
	?>
</table>
<?php require 'gabarit.php';


?>

