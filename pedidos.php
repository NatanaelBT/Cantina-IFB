<?php require('cabecalho.php'); 

@session_start();
if(isset($_SESSION['nome'])){
    echo "<br><br><h3>Olá $_SESSION[nome]</h3><br>";
}

?>

    <h1>PEDIDOS</h1>
    <p id="frase"> Escolha seu pedido: </p>


    <form name="pedidos" method="POST" action="carrinho.php">


        <p><label name="ham">LANCHES:</label>&nbsp;
            <select name="lanche" id="s1" class="form-control">
                <option value="#">Selecione</option>
                <option value="1">TAPIOCA R$6,00 </option>
                <option value="2">BOLO R$4,00</option>
                <option value="3">HAMBUGUER R$12,00</option>
                <option value="4">PIZZA FATIA R$5,00</option>
                <option value="5">SALGADO R$4,00</option>
                <option value="6">OMELETE R$6,00</option>
                <option value="7">BATATA FRITA R$5,00</option>
                <option value="8">PASTEL R$4,00</option>
                <option value="9">SANDUICHE R$5,00</option>
                <option value="10">HOT-DOG R$6,00</option>
            </select></p>



        <p><label name="beb">BEBIDAS: </label> &nbsp;
            <select name="bebida" id="s2" class="form-control">
                <option  value="#">Selecione</option>
                <option value="11">COCA-COLA LATA R$4,00</option>
                <option value="12">FANTA LARANJA LATA R$4,00</option>
                <option value="13">MILK-SHAKE R$10,00</option>
                <option value="14">SUCO R$4,00</option>
                <option value="15">LIMONADA R$4,00</option>
            </select></p>

            <input type="submit" value="FECHAR COMPRA">

            

</form>
    
<?php require('footer.php'); ?>