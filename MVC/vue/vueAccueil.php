<?php $this->titre = "Gestion des eleves"; ?>
<h1><u>Liste des élèves</h1></u>
<table border="3" bgcolor="teal">
<tr bgcolor="lightblue">
<th>CNE</th>
<th>Nom</th>
<th>Prénom</th>
<th>Etat</th>
<th>Photo</th>
<th>Details</th>
</tr>
<?php ob_start(); ?>
<?php
foreach ($eleves as $eleve) {
$et="";
$lien="";
if($eleve["etat"]== 1)
{
$et="active";
$lien="index.php?action=activer&cne=".$eleve["cne"]."&etat=0";
}
else
{
$et="desactive";
$lien="index.php?action=activer&cne=".$eleve["cne"]."&etat=1";
}
?>




<tr>
<td>
<?php echo $eleve["cne"]; ?></td>
<td><?php echo $eleve["nom"]; ?></td>
<td><?php echo $eleve["prenom"]; ?></td>
<td><a href="<?php echo $lien; ?>"><?php echo $et; ?></a></td>
<td><img src="<?= $eleve["Photo"] ?>" width="80"></td>
<td> <a href="<?= "index.php?action=eleve&cne=" . $eleve['cne'] ?>"><button>Details</button></a></td>
</tr>

<?php
}
?>
</table>