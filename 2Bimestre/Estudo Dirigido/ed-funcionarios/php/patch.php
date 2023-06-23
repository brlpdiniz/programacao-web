<?php
    $db_host = 'localhost';
    $db_nome = 'test';
    $db_user = 'root';
    $db_senha = '';

    $conexao = new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['id'])){
        $sql = $conexao->prepare("UPDATE funcionarios SET nome=?, sobrenome=?, CPF=?, Setor=?, TIPO=? WHERE FuncionarioID=?");
        $sql->execute(array($_POST['nome'],$_POST['sobrenome'],$_POST['CPF'],$_POST['Setor'],$_POST['TIPO'],$_POST['id']));
        echo 'Atualizado com sucesso!';
        header("Location: ../index/ListaFuncionarios.php");
    };
?>