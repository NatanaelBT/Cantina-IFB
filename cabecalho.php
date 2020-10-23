<?php 
@session_start();
if (isset($_SESSION['login'])) {
	?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="lib/owlcarousel2/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="lib/owlcarousel2/dist/assets/owl.theme.default.min.css">
	<title>Cantina IFB</title>
</head>
<body>
	<nav>
		<div class="menu">
            <a href="index.php" id="inicio" class="amenu">INICIO</a>
            <a href="index.php" class="amenu">PROMOÇÕES</a>
            <a href="index.php" class="amenu">CARDÁPIO</a>
            <a href="pedidos.php" class="amenu">PEDIDOS</a>
        </div>
        <div class="cadastro">
       		<a href="logoff.php" class="amenu">Sair</a>
        </div>
	</nav>
	<header>
		<img id="img-banner" src="img/imgseg.png" alt="Banner da home page, traz fotos de comidas" />
	</header>
<?php
	
}else {
?>

	<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="lib/owlcarousel2/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="lib/owlcarousel2/dist/assets/owl.theme.default.min.css">
	<title>Cantina IFB</title>
</head>
<body>
	<nav>
		<div class="menu">
            <a href="index.php" id="inicio" class="amenu">INICIO</a>
            <a href="index.php" class="amenu">PROMOÇÕES</a>
            <a href="index.php" class="amenu">CARDÁPIO</a>
            <a href="login.php" class="amenu">PEDIDOS</a>
        </div>
        <div class="cadastro">
            <a href="login.php" class="amenu">login</a>
            <a href="fazercadastro.php" class="amenu">cadastre-se</a>
        </div>
	</nav>
	<header>
		<img id="img-banner" src="img/imgseg.png" alt="Banner da home page, traz fotos de comidas" />
	</header>
<?php
}

?>

