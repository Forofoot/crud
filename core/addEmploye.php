<?php

include('../../config/settings.php');

$_POST['title'] = trim($_POST['title']);
$_POST['source'] = trim($_POST['source']);
$_POST['url'] = trim($_POST['url']);

if(empty($_POST['title'])){	
	flash_in('error', 'Le titre ne peut pas être vide.');
	header('Location: ../addActu.php');
	exit();
}
if(empty($_POST['source'])){	
	flash_in('error', 'La source ne peut pas être vide.');
	header('Location: ../addActu.php');
	exit();
}
if(empty($_POST['url'])){	
	flash_in('error', 'L\'url ne peut pas être vide.');
	header('Location: ../addActu.php');
	exit();
}
if(empty($_POST['date'])){	
	flash_in('error', 'La date ne peut pas être vide.');
	header('Location: ../addActu.php');
	exit();
}else{

    $add = $db->prepare('INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire)');
    $add->execute([
        ':prenom' => $_POST['prenom'],
        ':nom' => $_POST['nom'],
        ':sexe' => $_POST['sexe'],
        ':service' => $_POST['service'],
        ':date_embauche' => $_POST['date_embauche'],
        ':salaire' => $_POST['salaire']
    ]);
    header('Location: ../employe.php?success');
    exit();
}