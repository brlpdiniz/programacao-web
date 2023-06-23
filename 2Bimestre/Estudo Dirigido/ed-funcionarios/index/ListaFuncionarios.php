<?php
    $db_host = 'localhost';
    $db_nome = 'test';
    $db_user = 'root';
    $db_senha = '';
    
    $conexao = new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = $conexao->prepare("SELECT FuncionarioID, Nome, Sobrenome, CPF, Setor, TIPO FROM funcionarios");
    $sql->execute();
?>
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
				<a class="btn" href="Cadastro.php">CADASTRO</a>
				<!-- <a class="btn" href="ListaFuncionarios.php">FUNCIONÁRIOS</a> -->
			</div>
			<br>
			<h3 id="subH3b">Cadastro de Funcionário</h3>
			<br>
		</div>
		<div class="centerGPD2">
            <table class="fixed_headers">
                <thead>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Setor</th>
                    <th scope="col">Função</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </thead>
                <?php
                while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                    echo '<TR>'
                        .'<TD>'.$linha['FuncionarioID'].'</TD>'
                        .'<TD>'.$linha['Nome'].'</TD>'
                        .'<TD>'.$linha['Sobrenome'].'</TD>'
                        .'<TD>'.$linha['CPF'].'</TD>'
                        .'<TD>'.$linha['Setor'].'</TD>'
                        .'<TD>'.$linha['TIPO'].'</TD>'
                        .'<TD><a href="../index/Cadastro.php?id='.$linha['FuncionarioID'].'&nome='.$linha['Nome'].'&sobrenome='.$linha['Sobrenome'].'&CPF='.$linha['CPF'].'&Setor='.$linha['Setor'].'&TIPO='.$linha['TIPO'].'">Editar</a></TD>'
                        .'<TD><a href="../php/delete.php?id='.$linha['FuncionarioID'].'">Excluir</a></TD>'
                    .'</TR>';
                }
                ?>
            </table>
    </body>
</html>