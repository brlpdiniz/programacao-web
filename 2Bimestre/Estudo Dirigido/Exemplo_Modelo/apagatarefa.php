<?php

$db_host = 'localhost';
$db_nome = 'test';
$db_user = 'root';
$db_senha = '';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);

$TarefaID = $_GET['TarefaID'];

$query = $conexao->prepare('DELETE FROM tarefas WHERE TarefaID = :TarefaID');

$query->bindValue(':TarefaID', $TarefaID);

$query->execute();
// redireciona para a pagina listatarefas.php header("Location: ./listatarefas.php");
exit();
?>