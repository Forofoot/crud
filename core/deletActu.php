<?php

include('../config/settings.php');

    $read = $db->prepare('SELECT * FROM entreprise WHERE id = :id');
    $read->execute([
        ':id' => $_GET['id']    
    ]);
    $modif = $read->fetch();
    $delet = $modif['file'];
    if(!empty($delet)){
        unlink('../data/'.$delet);
    }

    $del = $db->prepare('DELETE FROM entreprise WHERE id = :id LIMIT 1');
    $del->execute([
        ':id' => $_GET['id']    
    ]);
    header('Location: ../actu.php?success');
    exit();