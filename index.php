<?php require('cabecalho.php'); ?>

	<article>
		<h1 id="nomedo">CANTINA IFB</h1>
		<p>A cantina IFB começou o funcionamento juntamente com a inaguração do IFB em 2008. Tem por objetivo
			proporcionar um ambiente agradável para a comunidade escolar, oferecendo qualidade e preço justo em cada
			refeição.</p>
		<p>Está localizada no coração de brasília, situada na SGAN Quadra 610 - Asa Norte, Brasília - DF, 70830-450.
			Telefone: (61) 2103-2100 </p>
		<div id="maps"><iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d479.9941219700087!2d-47.87942888531951!3d-15.753626700195893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3b1e02415707%3A0x3060d8a3139ab079!2sInstituto%20Federal%20de%20Bras%C3%ADlia%20-%20Campus%20Bras%C3%ADlia!5e0!3m2!1spt-BR!2sbr!4v1569532776914!5m2!1spt-BR!2sbr"
				width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>

	</article>

	<section id="pag_promo">
		<h2>Big Descontos</h2>
			<div id="text_promo">
				<p>NOSSAS MELHORES PROMOÇÕES!</p>
			</div>
			<div class="produtos">
				<div>
				<a href="https://www.youtube.com/watch?v=DY_RHowHIFs" target="_blank">
					<img src="img/combo.png" alt="" class="img-pro" id="imagem">
				</a>
				</div>
				<div>
					<span>Salgado + Refri</span>
				</div>
				<div>
					<span>R$7,00</span>
				</div>
			</div>
			<div class="produtos">
				<div >
					<a href="https://www.youtube.com/watch?v=zPPyY7wwKuk" target="_blank">
						<img src="img/chesseburguer.jpg" alt="" class="img-pro">
					</a>
				</div>
				<div>
					<span>Queijo Burguer</span>
				</div>
				<div>
					<span>R$12,00</span>
				</div>
			</div>
			<div class="produtos">
				<div >
					<a href="https://www.youtube.com/watch?v=3liyuh5GOzE" target="_blank">
						<img src="img/bolo.jpg" alt="" class="img-pro">
					</a>
				</div>
				<div>
					<span>Bolo</span>
				</div>
				<div>
					<span>R$3,50</span>
				</div>
			</div>
			<div class="produtos">
				<div >
					<a href="https://www.youtube.com/watch?v=pzWLQOwOkoo" target="_blank">
						<img src="img/acai.jpg" alt="" class="img-pro">
					</a>
				</div>
				<div>
					<span>Açai</span>
				</div>
				<div>
					<span>R$5,00</span>
				</div>
			</div>
			<div class="produtos">
				<div >
					<a href="https://www.youtube.com/watch?v=Eoe3TYWSymw" target="_blank">
						<img src="img/omele.jpg" alt="" class="img-pro">
					</a>
				</div>
				<div>
					<span>Omelete</span>
				</div>
				<div>
					<span>R$6,00</span>
				</div>
			</div>
	</section>
	<section id="pag_card">
		<h2>CARDÁPIO</h2>
		<ul>
			<li>LANCHES</li>
			<ol>
				<li>TAPIOCA <span class="vl">R$6,00</span> </li>
				<li>HAMBURGUER <span class="vl">R$12,00</span></li>
				<li>SALGADO <span class="vl">R$4,00</span></li>
				<li>OMELETE <span class="vl">R$6,00</span></li>
				<li>BATATA FRITA <span class="vl">R$5,00</span> </li>
				<li>PASTEL <span class="vl">R$4,00</span></li>
				<li>BOLO <span class="vl">R$3,50</span></li>
				<li>PIZZA <span class="vl">R$5,00</span></li>
				<li>SANDUICHE <span class="vl">R$5,00</span></li>
				<li>HOT-DOG <span class="vl">R$6,00</span></li>
			</ol></br>

			<li>BEBIDAS</li>
			<ol>
				<li>COCA-COLA LATA <span class="vl">R$4,00</span> </li>
				<li>FANTA LARANJA LATA <span class="vl">R$4,00</span></li>
				<li>MILK-SHAKE <span class="vl">R$10,00</span></li>
				<li>SUCO <span class="vl">R$5,00</span></li>
				<li>LIMONADA <span class="vl">R$8,00</span></li>
			</ol></br>

		</ul>
		<button id="fazerPedido" onclick="redirecionar()">FAZER PEDIDO</button>

		<script>
			function redirecionar() {
				window.location.href = "login.php";
			}
		</script>
	</section>

	<script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/owlcarousel2/dist/owl.carousel.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/efeitos.js"></script>

<?php
require('footer.php');
?>