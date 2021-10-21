<?php 

require('settings.php');
    $request = $pdo->prepare('SELECT * FROM employes ORDER BY id_employes');

    $request->execute();

    $allEmployees = $request->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <?php if($request->rowCount() > 0){?>
    <ul>
        <li><?php foreach($allEmployees as $employees):?>
        <p><?= $employees['prenom']?></p></li>
            <?php endforeach; ?>
    </ul>
    <?php } ?>
</body>
</html>