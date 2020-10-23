
<?php

require('cabecalho.php');


?>
    <form action="alterarsenha.php" method="POST">
        Login: <input type="text" class="form-control" name="login" required><br>
        Senha Atual: <input type="text" name="senha"  class="form-control" required><br>
        Nova Senha: <input type="text" name="newSenha" class="form-control" required><br>
        Repita a nova Senha: <input type="text" name="newSenha2" class="form-control" required><br>
        
        <input type="submit" value="Redefinir Senha">

    </form>
    <?php
require('footer.php');
?>

</body>
</html>