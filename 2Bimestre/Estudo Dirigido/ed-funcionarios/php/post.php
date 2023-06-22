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
        $sql->execute(array($_POST['nome'],$_POST['sobrenome'],$_POST['cpf'],$_POST['setor'],$_POST['tipo']));
        echo 'inserido com sucesso!';
    }
?>

<form method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <input type="text" name="cpf">
    <input type="text" name="setor">
    <input type="text" name="tipo">
    <input type="submit" value="Enviar">
</form>