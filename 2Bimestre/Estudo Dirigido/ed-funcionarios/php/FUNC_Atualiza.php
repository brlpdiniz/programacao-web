<?php
$db_host = 'localhost';
$db_nome = 'test';
$db_user = 'root';
$db_senha = '';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);

$TarefaID = $_POST['TarefaID'];
$descricao = $_POST['descricao'];

$completa = 'N';
if (isset($_POST['completa'])) {
   $completa = 'S';
}

$query = $conexao->prepare('UPDATE tarefas SET descricao=:descricao, completa=:completa WHERE TarefaID = :TarefaID');

$query->bindValue(':descricao', $descricao);
$query->bindValue(':completa', $completa);
$query->bindValue(':TarefaID', $TarefaID);

$query->execute();

// redireciona para a pagina listatarefas.php 
header("Location: ./listatarefas.php");
exit();
?>