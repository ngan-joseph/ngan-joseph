<?php  $titre="Gestion  des  absences  -  "  .$eleve['nom'];?>
<?php  ob_start();  ?>

	<h1><img src="<?= $eleve["Photo"] ?>" width="40"></h1>
   <h5><?= $eleve['nom'] ?></h5>
    <h5><?= $eleve['prenom'] ?></h5>
    <h5>CNE: <?= $eleve['cne'] ?></h5>
      <h6><a href="index.php"><button>Liste des Eleves</button></a></h6>
<hr />
<h5>ETAT: <font color="red" ><?php if($eleve['etat']==1){ echo "Actif";} else{ echo "Inactif";} ?>
</h5></font>
<hr />
 <h2>Le Bilan des absences de <?= $eleve['nom'] ?> <?= $eleve['prenom'] ?> est:</h2>
<table>
<tr>
<th>Matiere</th>
<th>Date</th>
<th>Nombre d'heures</th>
</tr>

<?php foreach ($abs as $absence): ?>
<tr>
	<td><?= $absence['matieres'] ?></td>
	<td><time><?= $absence['date'] ?></time></td>
	<td><?= $absence['nbr_heure'] ?></td>
</tr>

<?php endforeach; ?>
</table><br><hr>
<h3> Nombre d'heures totales par matiere:</h3>
<table>
	<tr>
		<th>Matieres</th>
		<th>Nb heures</th>
	</tr>
<?php foreach ($abs2 as $absence): ?>
<tr>
	<td><?= $absence['matieres'] ?></td>
	<td><?= $absence['nbr_heure'] ?></td>
</tr>
<?php endforeach; ?>
</table>
<hr />

<?php  $contenu  =  ob_get_clean();  ?>
<?php  require  'gabarit.php';  ?>
 
