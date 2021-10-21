<?php

include('../config/settings.php');

    $del = $db->prepare('DELETE FROM employes WHERE id_employes = :id LIMIT 1');
    $del->execute([
        ':id' => $_GET['id']    
    ]);
    header('Location: ../actu.php?success');
    exit();