<?php require('cabecalho.php'); 
@session_start();

if(isset($_SESSION['nome'])){
    echo "Olá $_SESSION[nome]";
    ?>
    <a href="logoff.php" class="amenu">SAIR</a>
    <a href="alterar.php" class="botaoregistro">Alterar Senha?</a>
    
<?php
} else {?>
    
    <form action="processalogin.php" method="POST">
        
        
            Login: <input type="text" name="login"><br>
            Senha: <input type="password" name="senha"><br>
            <input type="submit" value="Entrar">

    </form>
    <div class="bregistro">
        <a href="fazercadastro.php" class="botaoregistro">CADASTRE-SE</a><br>
        <a href="alterar.php" class="botaoregistro">Alterar Senha?</a>
    </div>
<?php
}



?>


    
<?php require('footer.php'); ?>