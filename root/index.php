<!DOCTYPE html>
<html>
	<?php
			$cabecalho_title = "Mirror Fashion";
			include("cabecalho.php");						
	?>	
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/estilo.css">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 320px)">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
	<head>
	<body>
		
		
		<section id="main"><!-- Inicio  da sessão principal-->
			<div class="container destaque"><!-- Inicio .container .destaque -->
				<section class="busca">
					<h2>Busca</h2>
					<form>
						<input type="search">
						<input type="image" src="img/busca.png">
					</form>
				</section><!-- fim .busca -->
				
				<section class="menu-departamentos"><!-- inicio .menu-departamentos -->
					<h2>Departamentos</h2>
					<nav>
						<ul>
							<li><a href="#">Blusas e Camisas</a>
								<ul>
									<li><a href="#">Manga curta</a></li>
									<li><a href="#">Manga comprida</a></li>
									<li><a href="#">Camisa social</a></li>
									<li><a href="#">Camisa casual</a></li>	
								</ul>
							</li>
							<li><a href="#">Calças</a></li>
							<li><a href="#">Saias</a></li>
							<li><a href="#">Vestidos</a></li>
							<li><a href="#">Sapatos</a></li>
							<li><a href="#">Bolsas e Carteiras</a></li>
							<li><a href="#">Acessórios</a></li>
						</ul>
					</nav>
			</section><!-- fim .menu-departamentos -->

		
		<section id="destaques"><!-- Iníco da sessão destinado aos Painéis com destaques -->
			<img src="img/destaque-home.png" alt="Promoção: Big City Night">
			</div><!-- fim .container .destaque -->
		</section><!-- Término da sessão principal-->

			<div class="container paineis">
				<section class="painel novidades">
					<h2>Novidades</h2>
					<ol><!-- primeiro produto -->
						<li>
							<a href="produto.php">
								<figure>
									<img src="img/produtos/miniatura1.png">
									<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
								</figure>
							</a>
						</li>

                        <li>
							<a href="produto.php">
								<figure>
									<img src="img/produtos/miniatura10.png">
									<figcaption>Blusa de lã por R$ 60,00</figcaption>
								</figure>
							</a>
						</li>

						<li>
							<a href="produto.php">
								<figure>
									<img src="img/produtos/miniatura4.png">
									<figcaption>Jaqueta com Capuz por R$ 129,00</figcaption>
								</figure>
							</a>
						</li>

						<li>
							<a href="produto.php">
								<figure>
									<img src="img/produtos/miniatura5.png">
									<figcaption>Regata Feminina por R$ 29,00</figcaption>
								</figure>
							</a>
						</li>

						<li>
							<a href="produto.php">
								<figure>
									<img src="img/produtos/miniatura9.png">
									<figcaption>Camisa Xadrez por R$ 69,00</figcaption>
								</figure>
							</a>
						</li>

						<li>
							<a href="produto.php">
								<figure>
									<img src="img/produtos/miniatura15.png">
									<figcaption>Vestido por R$ 90,00</figcaption>
								</figure>
							</a>
						</li>
					</ol><!-- Iníco do Painél Novidades -->
				</section><!-- Término do Painél Novidades -->
                
                <section class="painel mais-vendidos">
					<h2>Mais Vendidos</h2>
						<ol>
							<li>
								<a href="produto.php">
									<figure>
										<img src="img/produtos/miniatura9.png">
										<figcaption>R$ 69,00</figcaption>
									</figure>
								</a>
							</li>

                        	<li>
								<a href="produto.php">
									<figure>
										<img src="img/produtos/miniatura14.png">
										<figcaption>R$ 35,00</figcaption>
									</figure>
								</a>
							</li>

							<li>
								<a href="produto.php">
									<figure>
										<img src="img/produtos/miniatura7.png">
										<figcaption>R$ 20,00</figcaption>
									</figure>
								</a>
							</li>

							<li>
								<a href="produto.php">
									<figure>
										<img src="img/produtos/miniatura2.png">
										<figcaption>Regata Feminina por R$ 30,00</figcaption>
									</figure>
								</a>
							</li>

							<li>
								<a href="produto.php">
									<figure>
										<img src="img/produtos/miniatura15.png">
										<figcaption>R$ 90,00</figcaption>
									</figure>
								</a>
							</li>

							<li>
								<a href="produto.php">
									<figure>
										<img src="img/produtos/miniatura5.png">
										<figcaption>R$ 29,00</figcaption>
									</figure>
								</a>
							</li>
						</ol><!-- Iníco do Painél Mais vendidos -->

				</section><!-- Término do Painél Mais vendidos -->
			</div>
		</section><!-- Término da sessão destinado aos Painéis com destaques -->
		
		<?php include("rodape.php"); ?>
	</body>
</html>