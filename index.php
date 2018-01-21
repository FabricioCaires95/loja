<!DOCTYPE html>
<html>
<head>
	<html lang="pt-BR">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="(max-width: 939px)">
	<title> Mirro Fashion | Economia é aqui </title>
</head>

<body> 	

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php include("cabecalho.php");	?>
	
	
	<div class="container destaque">

		<section class="busca">

			<h2> Busca </h2>

			<form>
				<input type="search">
				<input type="image" src="img/busca.png">
			</form>
			
		</section> <!-- Fim Busca -->

		<section class="menu-departamentos">
			
			<h2> Departamentos</h2>
		
			<nav>
				<ul>
					<li>
						<a href="#"> Blusas e Camisas</a>
						<ul>
							<li><a href="#"> Manga curta</a></li>
							<li><a href="#"> Manga cumprida</a></li>
							<li><a href="#"> Camisa social</a></li>
							<li><a href="#"> Camisa casual</a></li>
						</ul>
					</li>	
							
					<li><a href="#"> Calças</a></li>
					<li><a href="#"> Saias</a></li>
					<li><a href="#"> Vestidos</a></li>
					<li><a href="#"> Sapatos</a></li>
					<li><a href="#"> Bolsas e Carteiras</a></li>
					<li><a href="#"> Acessórios</a></li>
				</ul>
			</nav>
		</section> <!-- fim menu departamento-->

		<img src="img/destaque-home.png" alt="Promoção: Big City Night">
	</div> <!-- Fim div container distaque-->

	<div class="container paineis">
		
		<!-- Primeiro produto -->
		<section class="painel novidades">
			<h2> Novidades </h2>

			<ol>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura1.png">
							<figcaption> Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>

				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura2.png">
							<figcaption> Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>	

				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura3.png">
							<figcaption> Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>	

				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura4.png">
							<figcaption> Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>

				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura5.png">
							<figcaption> Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>

				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura6.png">
							<figcaption> Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>	
			</ol>

			<button type="button">Mostrar mais </button>
		</section>

		<!-- Mais vendidos -->
		<section class="painel mais-vendidos">
			
			<h2> Mais Vendidos </h2>

			<ol>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura10.png">
							<figcaption> Blusa Azul por R$ 39,90</figcaption>
						</figure>
					</a>
				</li>

				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura15.png">
							<figcaption> Blusa Rosa por R$ 19,90</figcaption>
						</figure>
					</a>
				</li>

				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura8.png">
							<figcaption> Blusa Verde por R$ 39,90</figcaption>
						</figure>
					</a>
				</li>

				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura12.png">
							<figcaption> Blusa Verde por R$ 39,90</figcaption>
						</figure>
					</a>
				</li>


				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura11.png">
							<figcaption> Blusa Verde por R$ 39,90</figcaption>
						</figure>
					</a>
				</li>


				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura9.png">
							<figcaption> Blusa Verde por R$ 39,90</figcaption>
						</figure>
					</a>
				</li>
			</ol>

			<button type="button"> Mostrar mais </button>
		</section>

	</div>

	<?php include("rodape.php"); ?>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>

