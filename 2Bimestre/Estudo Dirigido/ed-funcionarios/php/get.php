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

<body>
    <h1>TEXO ANTES FIXO</h1>

    <table class="table">
    <thead>
    <th scope="col">Descricao</th>
    <th scope="col">Completa</th>
    <th scope="col"></th>
    <th scope="col"></th>
    </thead>
    <?php
    while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
        echo '<TR><TD>'.$linha['FuncionarioID'].'</TD><TD>'.$linha['Nome'].'</TD><TD>'.$linha['Sobrenome'].'</TD><TD>'.$linha['CPF'].'</TD><TD>'.$linha['Setor'].'</TD><TD>'.$linha['TIPO'].'</TD></TR><br>';
    }
    ?>
    </table>

    <h1>TEXO DEPOS FIXO</h1>


</body>