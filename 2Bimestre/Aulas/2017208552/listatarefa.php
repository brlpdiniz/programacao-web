<?php
$db_host = '10.10.0.70';

$db_nome = 'test';
$db_user = 'aluno.php';
$db_senha = 'php2023*';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);

$query = $conexao->prepare('SELECT * FROM tarefas');
$query->execute();

while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
    echo $linha['TarefaID'] . ' ' . $linha['Descricao'] . ' ' . $linha['Completa']  . '<br>';
}
?>