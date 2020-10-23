<?php

    require('autentica.php');
    require('db.php');
    $ps = $pdo->prepare("
            DELETE FROM tb_carrinho WHERE login = ?
            ");
    $ps->execute([$_SESSION['login']]);

    
         echo '<script> alert("Carrinho Limpo!!")</script>';
         echo '<meta http-equiv="refresh" content="0;url=pedidos.php">';
    
    ?>