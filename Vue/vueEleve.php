<?php  $this->titre="Gestion  des  absences  -  "  .$eleve['nom'];?>

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
	<td><?= $absence['mat'] ?></td>
	<td><time><?= $absence['date'] ?></time></td>
	<td><?= $absence['nbh'] ?></td>
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
	<td><?= $absence['nbh'] ?></td>
</tr>
<?php endforeach; ?>
<?php $contenu=ob_get_clean(); ?>
<?php  require  'gabarit.php';  ?>
 
</table><hr>

 <h4> Ajouter une abscence :</h4>
<form method="post" action="index.php?action=ajouter">
<p><input id="matieres" name="matiere" type="text" placeholder="matiere"  required /><br /><br>
<input id="nombre_heure" name="nombre_heure" placeholder="nombre d heure" required></p>
<input type="hidden" name="cne" value="<?= $eleve['cne'] ?>" /> 
<input type="submit" value="Ajouter" />
</form>

