<?php

try{
    $pdo = new PDO(
        'mysql:host=mysql669.umbler.com;dbname=db_cantinaifb;charset=utf8;port=41890',
        'natanaelb','Senha123'
    );
}
catch(PDOException $e){
    echo 'Erro:', $e->getMessage();
}
