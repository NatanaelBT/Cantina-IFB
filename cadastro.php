<?php   

require('db.php');

$nome = strip_tags($_POST['nome']);
$email = strip_tags($_POST['email']);
$login = strip_tags($_POST['login']);
$senha = strip_tags($_POST['senha']);
$telefone = strip_tags($_POST['telefone']);

if (
    valido_login($login) && //Tem que fazer os codigos de validação de dados
    valido_senha($senha) &&
    valido_nome($nome) && 
    valido_email($email) &&
    valido_telefone($telefone)
) {
    $ps = $pdo->prepare(
        'SELECT * FROM tb_cliente WHERE login = ?'
    );
    $ps->execute([$login]);

    if ($ps->fetch()) {
        echo 'Erro. Usuário já existe';
    }else {
        cadastrarCliente($nome, $email, $login, $senha, $telefone);
    }
}else {
    
    echo '<script> alert("Erro! Dados inválidos!!")</script>';
    echo '<meta http-equiv="refresh" content="0;url=fazercadastro.php">';

}

// Separar as funções do restando do código

function cadastrarCliente($nome, $email, $login, $senha, $telefone)
{
    global $pdo;

    $salt = 'ashd9asd#%wqe!eq'.$login;
    $senha_hash = sha1($salt.$senha);

    $ps = $pdo->prepare("
            INSERT INTO tb_cliente (nome, email, login, senha, telefone)
            VALUES (?, ?, ?, ?, ?)
            ");
    $ps->execute([$nome, $email, $login, $senha_hash, $telefone]);

    if ($ps -> rowCount() == 1) {
        
        echo '<script> alert("Cadastrado com sucesso!")</script>';
        echo '<meta http-equiv="refresh" content="0;url=login.php">';
    } else {
        echo 'Erro ao Cadastrar';
        echo '<script> alert("Usuario já existe!")</script>';
        echo '<meta http-equiv="refresh" content="0;url=fazercadastro.php">';

    }
}

function valido_login($a){
    if(strlen(trim($a)) == 0) {
        echo "Erro! Campo login obrigatório
        não preenchido";
        }
        else{
            return true;
        }
        
        
}
function valido_senha($a)
{
    if (strlen(trim($a)) == 0) {
        echo "Erro! Campo senha obrigatório
        não preenchido";
    } else {
        return true;
    }
}
    
    function valido_nome($a)
    {
        if (strlen(trim($a)) == 0) {
            echo "Erro! Campo nome obrigatório
        não preenchido";
        } else {
            return true;
        }
    }
    function valido_email($a)
    {
        if (filter_var($a, FILTER_VALIDATE_EMAIL)) {
            echo 'E-mail válido.';
            return true;
        } else {
            echo 'E-mail inválido.';
            return false;
        }
    }
    function valido_telefone($a)
    {
        if(strlen(trim($a) == 0)){
            echo "Erro! Campo telefone obrigatório não preenchido";
            
        }else {
            return true;
        }
        
    }






