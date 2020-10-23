<?php require('cabecalho.php'); ?>
    <form action="cadastro.php" method="POST">
        
        Nome: <input class="form-control" type="text" placeholder="Coloque seu nome" name="nome" required><br>
        email: <input type="email" class="form-control" placeholder="usuario@gmail.com" name="email" required><br>
        Login: <input type="text" class="form-control" name="login" required><br>
        Senha: <input type="password" name="senha"  class="form-control" required><br>
        Telefone: <input  placeholder="(DDD)99999-9999" maxlength="15" class="form-control"  type="number" name="telefone" required><br>
        <input type="submit" value="Cadastrar" class="form-control">

    </form>
<?php require('footer.php'); ?>
