<?php
$db_host = '10.41.3.0';
$db_nome = 'slm';
$db_user = 'pweb';
$db_senha = 'password1';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);

$query = $conexao->prepare('SELECT * FROM tarefas');
$query->execute();

while ($linha = $query->fetch(PDO::FETCH_ASSOC)){
    echo $linha['TarefaID'] . ' ' . $linha['Descricao'] . ' ' . $linha['Completa']  . '<br>';
}
?>