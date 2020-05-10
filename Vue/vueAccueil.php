<?php $titre = "Gestion des eleves"; ?>
	<?php ob_start(); ?>
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
	if($eleve["etat"]=="1")
	{
		$et="active";
		$lien="activer.php?cne=".$eleve["cne"]."&etat=0";
	}
	else
	{
		$et="desactive";
		$lien="activer.php?cne=".$eleve["cne"]."&etat=1";
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
<?php $contenu=ob_get_clean(); ?>
<?php require 'gabarit.php';


?>

