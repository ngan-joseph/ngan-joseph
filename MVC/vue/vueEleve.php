<?php $titre = "Gestion des absences: - " . $eleve['nom']; ?>
<?php ob_start(); ?>
<article>
<header>
	<h1><img src="<?= $eleve["Photo"] ?>" width="40"></h1>
   <h4><?= $eleve['nom'] ?></h4>
    <h4><?= $eleve['prenom'] ?></h4>
    <h4>CNE: <?= $eleve['cne'] ?></h4>
</header>
</article>
<hr />
<header>
  <h2>Le recapitulatif des absences de <?= $eleve['nom'] ?> <?= $eleve['prenom'] ?> est:</h2>
</header>
<table border="3" bgcolor="teal">
<tr bgcolor="lightblue">
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
</table><br><br>
<h2> Nombre d'heures totales par matiere:</h2>
<table border="2">
	<tr bgcolor="lightgreen">
		<th>Matieres</th>
		<th>Nb heures</th>
	</tr>
<?php foreach ($abs2 as $absence): ?>
<tr>
	<td><?= $absence['matieres'] ?></td>
	<td><?= $absence['nbh'] ?></td>
</tr>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>

</table>
<br><br>
<h3> Ajouter une abscence :</h3>
<form method="post" action="index.php?action=ajouter">
<p><input id="matieres" name="matiere" type="text" placeholder="matiere"  required /><br /></p>
<p><input id="nombre_heure" name="nombre_heure" placeholder="nombre d heure" required><br /></p>
<input type="hidden" name="cne" value="<?= $eleve['cne'] ?>" /> 
<input type="submit" value="Ajouter" />
</form>
