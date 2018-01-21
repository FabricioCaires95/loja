<!DOCTYPE html>
<html>
<head>
	<title>	Produto | Mirror Fashion </title>
	<html lang="pt-BR">	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<link rel="stylesheet" type="text/css" href="css/produto.css">
</head>
<body>

	<?php include("cabecalho.php"); ?>

	<div class="produto-back">
		
		<div class="container">

			<div class="produto">
				
				<h1> Fuzzy Cardigan </h1>
				<p> Por apenas R$ 19,90</p>

				<form action="chekout.php" method="POST">
					<fieldset class="cores">
						<legend> Escolha a Cor: </legend>

						<input type="radio" name="cor" value="verde" id="verde" checked>
						<label for="verde">
							<img src="img/produtos/foto2-verde.png" alt="verde">
						</label>


						<input type="radio" name="cor" value="rosa" id="rosa">
						<label for="rosa">
							<img src="img/produtos/foto2-rosa.png" alt="rosa">
						</label>

						<input type="radio" name="cor" value="azul" id="azul">
						<label for="azul">
							<img src="img/produtos/foto2-azul.png" alt="azul">
						</label>

					</fieldset>

					<fieldset class="tamanhos">
						<legend>Escolha o Tamanho: </legend>

						<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
						
						<output for="tamanho" name="valorTamanho"> 42 </output>


						<input type="hidden" name="nome" value="Fuzzy Cardigan">
						<input type="hidden" name="preco" value="19.00">
					</fieldset>
						

					<input type="submit" class="comprar" value="comprar">

				</form>

			</div>

			<div class="detalhes">
				<h2> Detalhes do produto</h2>

				<p>Esse é o melhor casaco de Cardigã que você já viu. Excelente
				material italiano com estampa desenhada pelos artesãos da
				comunidade de Krotor nas ilhas gregas. Compre já e receba hoje
				mesmo pela nossa entrega a jato.</p>

				<table>
					<thead>
						<tr>
							<th>Características</th>
							<th>Detalhe </th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Cardigã 7845</td>
						</tr>

						<tr>
							<td>Material</td>
							<td>Algodão e poliester </td>
						</tr>

						<tr>
							<td>Lavagem</td>
							<td>Lavar a mão</td>
						</tr>
					</tbody>
				</table>


			</div>
			
		</div>
	</div>
	<?php include("rodape.php"); ?>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
		
		$('[name=tamanho').on('input',function(){
			$('[name=valorTamanho').val(this.value);

		});
	</script>


</body>
</html>