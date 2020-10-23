<?php 

require('db.php');


$login = $_POST['login'];
$senha = $_POST['senha'];
$newSenha = $_POST['newSenha'];
$newSenha2 = $_POST['newSenha2'];

$salt = 'ashd9asd#%wqe!eq'.$login;
$senha_hash = sha1($salt.$senha);

$ps = $pdo->prepare(
    'SELECT * FROM tb_cliente WHERE login = ? AND senha = ?'
);
$ps->execute([$login, $senha_hash]);

if (($linha = $ps->fetch()) && ($newSenha == $newSenha2)) {
    
    $senha_hash1 = sha1($salt.$newSenha);

    $ps = $pdo->prepare("
        UPDATE tb_cliente
        SET senha = ?
        WHERE login = ?
    
            ");
    $ps->execute([$senha_hash1, $login]);
    
    
    echo '<script> alert("Senha Alterada!!")</script>';
    echo '<meta http-equiv="refresh" content="0;url=login.php">';

}
else {
    echo '<script> alert("Erro. Dados não conferem!!!")</script>';
    echo '<meta http-equiv="refresh" content="0;url=alterar.php">';
}













?> 