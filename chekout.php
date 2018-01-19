<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Chekout</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap-flatly.css">
	
	<style type="text/css">
		
		.navbar {

			margin: 0;
		}
	</style>

</head>
<body>

	<!-- Inicio navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">

		<div class="navbar-header">
			<a href="index.php" class="navbar-brand"> Mirror Fashion</a>
			<button class="navbar-toggle" type="button" data-target=".navbar-collapse"
					data-toggle="collapse">
				<span class="glyphicon glyphicon-align-justify"></span>
			</button>
		</div>

		<ul class="nav navbar-nav collapse navbar-collapse">
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="#">Ajuda</a></li>
			<li><a href="#">Perguntas frequentes</a></li>
			<li><a href="#">Entre em contato</a></li>
		</ul>
	</nav>
	

	<div class="jumbotron">

		<h1>Otima escolha !</h1>

		<p>Obrigado por comprar na mirror fashion !
			Preecha seus dados para efetivar a compra </p>

	</div>

	<div class="container">
	
			
				<div class="row"> 

					<div class="col-sm-4 col-lg-3">

						<div class="panel panel-default">

							<div class="panel-heading">					
								<h2 class="panel-title"> Sua Compra </h2>
							</div>

					
							<div class="panel-body">

								<img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan"
									class="img-thumbnail img-responsive hidden-xs" >

								<dl>
									<dt>Produto</dt>
									<dd><?= $_POST['nome'] ?> </dd>

									<dt>Cor </dt>
									<dd><?= $_POST['cor'] ?></dd>

									<dt>Tamanho </dt>
									<dd><?= $_POST['tamanho'] ?></dd>

									<dt>Preço</dt>
									<dd><?= $_POST['preco'] ?></dd>
								</dl>

							</div>

						</div>

					</div>			


					<form action="#" method="POST" class="col-sm-8 col-lg-9">
						
						<div class="row">

							<fieldset class="col-md-6"> 

								<legend>Dados Pessoais</legend>

									<div class="form-group">
										<label for="nome">Nome completo</label>
										<input type="text" class="form-control" id="nome" name="nome" autofocus required>
									</div>

									<div class="form-group">
										<label for="email">Email</label>
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input type="email" class="form-control" id="email" name="email" 
												placeholder="email@exemplo.com">
										</div>
									</div>

									<div class="form-group">
										<label for="cpf">CPF</label>
										<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" 
											required>
									</div>

									<div class="checkbox">
										<label>
											<input type="checkbox" value="sim" name="spam" checked>
											Quero receber ofertas da Mirror Fashion
										</label>

									</div>

							</fieldset>


							<fieldset class="col-md-6"> 

								<legend>Cartão de Crédito </legend>

									<div class="form-group">
										<label for="numero-cartao">Número - CVV</label>
										<input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
									</div>

									<div class="form-group">
										<label for="bandeira-cartao">Bandeira</label>
										<select name="bandeira-cartao" id="bandeira-cartao"	class="form-control">
											<option value="master">MasterCard</option>
											<option value="visa">VISA</option>
											<option value="amex">American Express</option>
										</select>
									</div>

									<div class="form-group">
										<label for="validade-cartao">Validade</label>
										<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
									</div>


							</fieldset>			

						</div>

						<button type="submit" class="btn btn-primary">
							<span class="glyphicon glyphicon-thumbs-up"></span>
							Confirmar Pedido
						</button>

					</form>


		</div> <!-- Fim row -->

	</div> <!-- fim container -->

		

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>


</body>
</html>