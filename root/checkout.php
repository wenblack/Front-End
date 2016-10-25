<!doctype html>
	<html>
		<head>
			<link rel="stylesheet" href="css/bootstrap.css">
			<meta charset="UTF-8">
			<title>Checkout Mirror Fashion</title>
			<meta name="viewport" content="width=device-width">
		</head>
		
		<body>
			<div class="jumbotron">
				<div class="container">
					<h1>Ótima escolha!</h1>
					<p>Obrigado por comprar na Mirror Fashion!
					Preencha seus dados para efetivar a compra.</p>
				</div>
			</div>
	
			<div class="container">
				<div class="panel panel-success">
					<div class="panel-heading">
						<img src="img/produtos/foto2-<?= $_POST['cor'] ?>.png"
							class="img-thumbnail img-responsive">
							
						<h1 class="panel-title">Sua compra</h2>
						
						
						
						<dl>
							<dt>Cor</dt>
							<dd><?= $_POST['cor'] ?> </dd>
				
							<dt>Tamanho</dt>
							<dd><?= $_POST['tamanho'] ?> </dd>
				
							<dt>Produto</dt>
							<dd><?= $_POST['nome'] ?> </dd>

							<dt>Preço</dt>
							<dd><?= $_POST['preco'] ?> </dd>
			
						</dl>
					</div>
				</div>	
			</div>
			
		</body>
	
	</html>