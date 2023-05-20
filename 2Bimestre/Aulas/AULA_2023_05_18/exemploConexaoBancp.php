<?php
$db_host = 'localhost';
$db_nome = 'SLM';
$db_user = 'root';
$db_senha = '';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);

$query = $conexao->prepare('SELECT * FROM tarefas');
$query->execute();

while ($linha = $query->fetch(PDO::FETCH_ASSOC)){
    echo $linha['TarefaID'] . ' ' . $linha['Descricao'] . ' ' . $linha['Completa']  . '<br>';
}
?>