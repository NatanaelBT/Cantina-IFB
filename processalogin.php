<?php

session_start();

require('db.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

$salt = 'ashd9asd#%wqe!eq'.$login;
$senha_hash = sha1($salt.$senha);

$ps = $pdo->prepare(
    'SELECT * FROM tb_cliente WHERE login = ? AND senha = ?'
);
$ps->execute([$login, $senha_hash]);

if ($linha = $ps->fetch()) {
    $_SESSION['login'] = $linha['login'];
    $_SESSION['nome'] = $linha['nome'];
    $_SESSION['email'] = $linha['email'];
    echo '<meta http-equiv="refresh" content="0;url=pedidos.php">';
    //echo '<a href="alterar.html">Redefinir Senha</a>';
}
else {
    echo '<script> alert("Erro na autenticação!")</script>';
    echo '<meta http-equiv="refresh" content="0;url=login.php">';
    exit;
}