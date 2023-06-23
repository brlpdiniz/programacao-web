<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulário de Fale Conosco</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<link href="..\css\styleFunc.css" rel="stylesheet">
	</head>

	<body class="bodyForm">
		<div id="divTitulo">
			<div class="menuPrinc">
				<!--Menu-->
				<a class="btn" href="index.php">PRINCIPAL</a>
				<!-- <a class="btn" href="FUNC_1_Cadastro.html">CADASTRO</a> -->
				<a class="btn" href="ListaFuncionarios.php">FUNCIONÁRIOS</a>
			</div>
			<br>
			<h3 id="subH3b">Cadastro de Funcionário</h3>
			<br>
		</div>
		<div class="centerGPD2">
			<form action="<?php echo isset($_GET['id']) ? '../php/patch.php' : '../php/post.php';?>" method="post">
			<input type="hidden" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '';?>" name="id" >
				<table>
					<tr>
						<td>
							<br>
							<h2 id="tituloTabela">Dados do Funcionário:</h2>
							<br>
							<br>
							<p><b>- Nome: </b></p>
							<br>
							<input type="text" size="60" value="<?php echo isset($_GET['nome']) ? $_GET['nome'] : '';?>" name="nome" placeholder=" Primeiro Nome" required>
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<p><b>- Sobrenome: </b></p>
							<br>
							<input type="text" size="14" value="<?php echo isset($_GET['sobrenome']) ? $_GET['sobrenome'] : '';?>" name="sobrenome" placeholder=" Último Nome">
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<p><b>- CPF: </b></p>
							<br>
							<input type="text" size="14" placeholder=" vvv.xxx.yyy-zz" value="<?php echo isset($_GET['CPF']) ? $_GET['CPF'] : '';?>" name="CPF"
								pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}">
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<p><b>- Setor: </b></p>
							<br>
							<input type="text" size="60" value="<?php echo isset($_GET['Setor']) ? $_GET['Setor'] : '';?>" name="Setor" placeholder=" Administrativo/Producao/Logistica/ETC" required>
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<p><b>- Função: </b></p>
							<br>
							<input type="text" size="60" value="<?php echo isset($_GET['TIPO']) ? $_GET['TIPO'] : '';?>" name="TIPO" placeholder=" Estagiario/Funcionario/Terceirizado">
						</td>
					</tr>
					<tr>
						<td id="enviar">
							<input class="btn" style="color: black" type="submit" value="Enviar">
						</td>
					</tr>
				</table>
				<br>
				<br>
			</form>
		</div>
	</body>

</html>