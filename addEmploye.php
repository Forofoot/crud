<?php

include('config/settings.php');

?><!DOCTYPE html>
<html>
<head>
	<?php include('includes/head.php'); ?>
	<link rel="stylesheet" href="css/style_back.css">
	<title>Ajouter une Actualité</title>
</head>
<body>
	<?php include('includes/header.php'); ?>
	<main>
		<?php include('includes/nav.php'); ?>
		<section class="item">
			<h1>Ajouter une Employé</h1>
			<form method="POST" action="core/addEmploye.php">
				<p>
					<input type="text" name="prenom" placeholder="Prénom" required>
				</p>
				<p>
					<input type="text" name="nom" placeholder="Nom" required>
				</p>
				<p>
					<input type="text" name="sexe" placeholder="Sexe" required>
				</p>
				<p>
					<input type="text" name="service" placeholder="Service" required>
				</p>
				<p>
					<input type="date" name="date_embauche" placeholder="Date d'embauche" required>
				</p>
				<p>
					<input type="text" name="salaire" placeholder="Salaire" required>
				</p>
				<p>
					<button type="submit">Validate</button>
				</p>
			</form>
		</section>
	</main>
</body>
</html>