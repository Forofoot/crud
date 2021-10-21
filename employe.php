<?php 

include('config/settings.php');

$actu = $db->prepare('SELECT * FROM employes');
$actu->execute();

$tActu = $actu->fetchAll(PDO::FETCH_ASSOC);

?><!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.php'); ?>
    <title>Employé</title>
</head>
<body>
    <?php include('includes/header.php'); ?>   
    <main>
        <?php include('includes/nav.php'); ?>
        <section class='item'>
             <div class='heading'>
                <h1>Actualité</h1>
                <a href="../back/addEmploye.php">Poster</a>
            </div>
             <?php foreach ($tActu as $value) { ?>
            <figure>
                <figcaption><?= $value['prenom'] ?></figcaption>
                <figcaption><?= $value['nom'] ?></figcaption>
                <figcaption><?= $value['sexe'] ?></figcaption>
                <figcaption><?= $value['service'] ?></figcaption>
                <figcaption><?= $value['date_embauche'] ?></figcaption>
                <figcaption><?= $value['salaire'] ?></figcaption>
                <div class='icon'>
                    <a href="../back/core/deletEmploye.php?id=<?= $value['id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 6v18h18v-18h-18zm5 14c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm4-18v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.315c0 .901.73 2 1.631 2h5.712z"/></svg></a>
                </div>
            </figure>
            <?php } ?>
        </section>
    </main>
</body>
</html>