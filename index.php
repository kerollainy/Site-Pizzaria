<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sistema de Cadastro</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"><!-- quando estiver no serevidor o href será '_css/estilo.css' -->
</head>
<body>
	<div class="principal">
			<div class="cabecalho">
				<div class="logo-cabecalho">
					<a href="./">Pizzaria Online</a><!--texto detro do corpo-->
				</div>
<!--essa parte é a caixa de pesquisa do site-->				
				<div class="pesquisa">
					<input type="text" />
					<input type="submit" value="Pesquisar" />
				</div>
<!--aqui fica os botoes para o menu do site, onde vamos por para cada botao direcionar para sua pagina em especifico-->				
			</div>
	<div class="menu">
	<ul>
		<li class="inicio">
			<a href="index.html">Início</a>
		</li>

		<li class="cadastro">
			<a href="cadastro.html">Faça seu pedido</a>
		</li>

		<li>
			<a href="contatos - copia.html">Contatos</a>
		</li>

		</ul>
	</div>
	<div class="corpo">
	<div class="container">
		<nav>
			<ul class="menuzinho">
				<a href="index.php"><li>Cadastro</li></a>
				<a href="consultas.php"><li>Consultas</li></a>
			</ul>
		</nav>
		<section>
			<h1>Cadastro de Usuários</h1>
			<hr><br><br>

			<form method="post" action="processa.php">
				<input type="submit" value="Salvar" class="btn">
				<input type="reset" value="Limpar" class="btn">
				<br><br>

				Nome<br>
				<input type="text" name="nome" class="campo" maxlength="40" required autofocus><br><br>

				Número<br>
				<input type="telefone" name="telefone" class="campo" maxlength="13"><br><br>

				Email<br>
				<input type="email" name="email" class="campo" maxlength="50" required><br><br>

				CEP<br>
				<input type="text" name="cep" class="campo" maxlength="8" required><br><br>

				<!--Endereço<br>
				<input type="text" name="endereco" class="campo" maxlength="50" required><br><br>-->

			</form>
		</section>
	
		<div class="rodape">
			Copyrith - Todos os direitos reservados | Desenvolvido Por Julinho e Kero.
		</div>
	</div>
</div>

</body>
</html>