<!doctype html>
	<html>
		<head>
			<link rel="stylesheet" href="css/bootstrap.css">
			<meta charset="UTF-8">
			<title>Checkout Mirror Fashion</title>
			<meta name="viewport" content="width=device-width">
		</head>
		
		<body>
			<div class="container">
				<div class="jumbotron">
					<h1>Ótima escolha!</h1>
					<p>Obrigado por comprar na Mirror Fashion!
					Preencha seus dados para efetivar a compra.</p>
				</div>
			</div>
	
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">Sua compra</h2>	
							</div>
				
							<div class="panel-body">
								<div class="hidden-xs">
									<img src="img/produtos/foto2-<?= $_POST['cor'] ?>.png"
									class="img-thumbnail img-responsive">
								</div>			
						
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
				
			
			
					<form class="col-sm-8">
						<fieldset class="col-md-6">
							<legend>Dados pessoais</legend>
							<div class="form-group">
								<label for="nome">Nome completo</label>
								<input type="text" class="form-control" id="nome" name="nome" autofocus required>
							</div>
						
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email"
								placeholder="email@exemplo.com" required>
							</div>
					
							<div class="form-group">
								<label for="cpf">CPF (000.000.000-00)</label>
								<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
							</div>
					
							<div class="checkbox">
								<label>
									<input type="checkbox" value="sim" name="spam" checked>
									Quero receber spam da Mirror Fashion
								</label>
							</div>
						
						</fieldset>
					
						<fieldset class="col-md-6">
							<legend>Cartão de crédito</legend>
						
							<div class="form-group">
								<label for="numero-cartao">Número - CVV</label>
								<input type="text" class="form-control"
								id="numero-cartao" name="numero-cartao">
							</div>
						
							<div class="form-group">
								<label for="bandeira-cartao">Bandeira</label>
								<select name="bandeira-cartao" id="bandeira-cartao"
									class="form-control">
								
									<option value="master">MasterCard</option>
									<option value="visa">VISA</option>
									<option value="amex">American Express</option>
								</select>
							</div>
						
							<div class="form-group">
								<label for="validade-cartao">Validade</label>
								<input type="month" class="form-control"
									id="validade-cartao" name="validade-cartao">
							</div>
					
						</fieldset>
					
						<div class="pull-right">		
							<button type="submit" class="btn btn-primary">	
								Confirmar Pedido
							</button>
						</div>	
					
					</form>
				</div>						
			</div>	
		</body>
	
	</html>