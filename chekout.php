<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Chekout</title>
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<h1>Otima escolha !</h1>
	<p>Obrigado por comprar na mirror fashion !
	Preecha seus dados para efetivar a compra </p>

	<h2> Sua Compra </h2>

	<dl>
		<dt>Cor</dt>
		<dd><?= $_POST['cor'] ?></dd>

		<dt>Tamanho</dt>
		<dd><?= $_POST['tamanho'] ?></dd>

		<dt>nome</dt>
		<dd><?= $_POST['nome'] ?></dd>

		<dt>Preço</dt>
		<dd><?= $_POST['preco'] ?></dd>
	</dl>

</body>
</html>