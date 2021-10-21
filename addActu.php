<?php

include('../config/settings.php');

?><!DOCTYPE html>
<html>
<head>
	<?php include('../includes/head.php'); ?>
	<link rel="stylesheet" href="css/style_back.css">
	<title>Ajouter une Actualité</title>
</head>
<body>
	<?php include('../includes/header.php'); ?>
	<main>
		<?php include('../includes/nav.php'); ?>
		<section class="item">
			<h1>Ajouter une Actualité</h1>
			<form method="POST" action="core/addActu.php" enctype="multipart/form-data">
				<p class="addFile">
                    <label for="more"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z"/></svg></label>
                    <input type="file" name="fichier" id="more" onchange="getImage(this.value);" required>
                    <div id="display-image"></div>
                </p>
				<p>
					<input type="text" name="title" placeholder="Le titre de l'actualité" required>
				</p>
				<p>
					<input type="date" name="date" class="date" required>
				</p>
				<p>
					<input type="text" name="source" placeholder="La source de l'actualité" required>
				</p>
				<p>
					<input type="text" name="url" placeholder="Lien vers le média" required>
				</p>
				<p>
					<button type="submit">Validate</button>
				</p>
			</form>
		</section>
	</main>
	<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        function getImage(imageName){
            var newimg=imageName.replace(/^.*\\/,"");
            $('#display-image').html(newimg);
        }
    </script>
</body>
</html>