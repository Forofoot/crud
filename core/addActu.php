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
}

$error = false;
if($_FILES['fichier']['error'] != 0){
    $error = true;
}
$tExtOk = ['png','jpg','jpeg','JPG'];
$tFilename = explode('.', $_FILES['fichier']['name']);
$extFile = array_pop($tFilename);

if(!in_array($extFile, $tExtOk)){
    $error = true;
}
if($error){
    header('Location: ../addActu.php?error');
    exit();
}else{
    $newName = 'pic-'.time().'.'.$extFile;
    move_uploaded_file($_FILES['fichier']['tmp_name'],'../data/'.$newName);

    $add = $db->prepare('INSERT INTO entreprise (file, title, source, date, url) VALUES (:file, :title, :source, :date, :url)');
    $add->execute([
        ':file' => $newName,
        ':title' => $_POST['title'],
        ':source' => $_POST['source'],
        ':date' => $_POST['date'],
        ':url' => $_POST['url']
    ]);
    header('Location: ../actu.php?success');
    exit();
}