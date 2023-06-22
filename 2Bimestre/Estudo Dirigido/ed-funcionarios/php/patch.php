<?php
    $db_host = 'localhost';
    $db_nome = 'test';
    $db_user = 'root';
    $db_senha = '';

    $conexao = new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['id'])){
        $sql = $conexao->prepare("DELETE FROM funcionarios WHERE FuncionarioID = ?");
        $sql->execute(array($_GET['id']));
        echo 'Deletado com sucesso!';
        header("Location: ../index/ListaFuncionarios.php");
    } else{
        echo 'ID não informado!';
    };
?>