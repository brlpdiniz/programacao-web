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
			<form action="mailto:brunoldiniz14@gmail.com">
				<table>
					<tr>
						<td>
							<br>
							<h2 id="tituloTabela">Dados do Funcionário:</h2>
							<br>
							<br>
							<p><b>- Nome: </b></p>
							<br>
							<input type="text" size="60" value="<?php echo isset($_GET['nome']) ? $_GET['nome'] : '';?>" placeholder=" Primeiro Nome" required>
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<p><b>- Sobrenome: </b></p>
							<br>
							<input type="text" size="14" value="<?php echo isset($_GET['sobrenome']) ? $_GET['sobrenome'] : '';?>" placeholder=" Último Nome">
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<p><b>- CPF: </b></p>
							<br>
							<input type="text" size="14" placeholder=" vvv.xxx.yyy-zz" value="<?php echo isset($_GET['CPF']) ? $_GET['CPF'] : '';?>"
								pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}">
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<p><b>- Setor: </b></p>
							<br>
							<input type="text" size="60" value="<?php echo isset($_GET['Setor']) ? $_GET['Setor'] : '';?>" placeholder="📞" required>
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<p><b>- Função: </b></p>
							<br>
							<input type="text" size="60" value="<?php echo isset($_GET['TIPO']) ? $_GET['TIPO'] : '';?>" placeholder=" ✉">
						</td>
					</tr>
					<tr>
						<td id="enviar">
							<input class="btn" style="color: black" type="submit">
						</td>
					</tr>
				</table>
				<br>
				<a class="sombreado" href="..\index\LGPD_5_Referencias.html">Referências</a>
				<br>
				<br>
			</form>
		</div>
	</body>

</html>