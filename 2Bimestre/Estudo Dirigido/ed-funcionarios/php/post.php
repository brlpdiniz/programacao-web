<?php
    $db_host = 'localhost';
    $db_nome = 'test';
    $db_user = 'root';
    $db_senha = '';
    
    $conexao = new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //Insert.
    if(isset($_POST['nome'])){
        $sql = $conexao->prepare("INSERT INTO funcionarios VALUES (null,?,?,?,?,?)");
        $sql->execute(array($_POST['nome'],$_POST['sobrenome'],$_POST['CPF'],$_POST['Setor'],$_POST['TIPO']));
        echo 'inserido com sucesso!';
        header("Location: ../index/ListaFuncionarios.php");
    };

    // foreach ($_POST as $param_name => $param_val) {
    //     echo "Param: $param_name; Value: $param_val<br />\n";
    // }
?>