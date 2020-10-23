<?php 
require('cabecalho.php'); 
require('autentica.php');
require('db.php');


$lanche = $_POST["lanche"];
$bebida = $_POST["bebida"];

$ps = $pdo->prepare(
    'SELECT nomeProduto,precoProduto FROM tb_produtos WHERE idproduto = ?'
    
);
$ps->execute([$lanche]);


if ($linha = $ps->fetch()) {
    $lancheNome = $linha['nomeProduto'];
    $lanchePreco = $linha['precoProduto'];
}

$ps = $pdo->prepare(
    'SELECT nomeProduto,precoProduto FROM tb_produtos WHERE idproduto = ?'
    
);
$ps->execute([$bebida]);


if ($linha = $ps->fetch()) {
    $bebidaNome = $linha['nomeProduto'];
    $bebidaPreco = $linha['precoProduto'];
}

$precoFinal = $lanchePreco+$bebidaPreco;

cadastrarCarrinho($lancheNome, $bebidaNome, $precoFinal);

function cadastrarCarrinho($lancheNome, $bebidaNome, $precoFinal){
    
    global $pdo;

$ps = $pdo->prepare("
            INSERT INTO tb_carrinho (login, lanche, bebida, valorTotal)
            VALUES (?, ?, ?, ?)
            ");
    $ps->execute([$_SESSION['login'], $lancheNome, $bebidaNome, $precoFinal]);

    if ($ps -> rowCount() == 1) {

        echo "<h3>Seu pedido é $lancheNome com $bebidaNome<br></h3>";
       
        echo "<h3>O total é R$$precoFinal<br></h3>";
        
    } else {
        
        echo '<script> alert("Erro ao Cadastrar!")</script>';
       

    }
}
if ($precoFinal == 8) {
    echo '<a href="https://pag.ae/7WwhSwQ9r" class="amenu">Pagamento</a>';
}
if ($precoFinal == 9) {
    echo '<a href="https://pag.ae/7WwhTzwTM" class="amenu">Pagamento</a>';
}
if ($precoFinal == 10) {
    echo '<a href="https://pag.ae/7WwhTWxB6" class="amenu">Pagamento</a>';
}
if ($precoFinal == 14) {
    echo '<a href="https://pag.ae/7WwhU8H4t" class="amenu">Pagamento</a>';
}
if ($precoFinal == 15) {
    echo '<a href="https://pag.ae/7WwhUfksM" class="amenu">Pagamento</a>';
}
if ($precoFinal == 16) {
    echo '<a href="https://pag.ae/7WwhUuVsR" class="amenu">Pagamento</a>';
}
if ($precoFinal == 22) {
    echo '<a href="https://pag.ae/7WwhUoGMa" class="amenu">Pagamento</a>';
}


?> 


<a href="limparcarrinho.php" class="amenu">Limpar Carrinho</a>


    
 
<?php require('footer.php'); ?>