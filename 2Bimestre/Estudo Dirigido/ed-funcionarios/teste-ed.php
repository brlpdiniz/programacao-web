<?php
$db_host = 'localhost';
$db_nome = 'test';
$db_user = 'root';
$db_senha = '';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);

$query = $conexao->prepare('SELECT * FROM Nome');
$query->execute();

while ($linha = $query->fetch(PDO::FETCH_ASSOC)){
    echo $linha['FuncionarioID'] . ' ' . $linha['Nome'] . ' ' . $linha['Sobrenome']  . '<br>';
}
?>