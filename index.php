<body bgcolor="paleturquoise">
<div style="background-color: lightcyan;"><h1><marquee>Bienvenue sur ce site</marquee></h1></div>
<br /><hr>
<h4 style="font-family:verdana";>Il s'agit d'un site de Gestion d'Eleves et de leurs abscences codé en langage php en modele Orienté Objet.
Il a été factorisé par une architecture MVC. Le code est disponible source sur github à ce lien: 
<a href="https://github.com/ngan-joseph/ngan-joseph">MonGithub</a></h4>
<hr size="3">

<!--
<b>Liste des Eleves: </b>
<a href="index3.php"><button style=" font-size: 20;">Afficher La liste d'Eleves</button></a>
<div style="background-color: lightcyan;"><h3>Inserer un élève:</h3>
<form method="post" action="index3.php?action=inserer">
CNE: &nbsp&nbsp&nbsp   <input id="cne" name="cne" type="text" placeholder="CNE" required /><br />
Nom: &nbsp&nbsp&nbsp <input id="nom" name="nom" type="text" placeholder="Nom"  required /><br />
Prénom: <input id="prenom" name="prenom" placeholder="Prenom" required><br />
<input type="submit" value="Ajouter" />
</form>
</div>
!-->

<form method="get" action="index.php">
	<input type="text" name="login" placeholder="login" required /><br>
	<input type="text" name="mdp" required /><br>
	<input type="submit" value="Acceder aux eleves" />
</form>

<?php
if ($_GET['login']=='admin' && $_GET['mdp']=='admin'){
	require_once 'index3.php';
}

else
	echo "Identifiant incorrect ";

?>



