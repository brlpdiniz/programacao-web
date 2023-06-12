<?php
$db_host = '10.10.0.70';
$db_nome = 'test';
$db_user = 'aluno.php';
$db_senha = 'php2023*';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);

$descricao = $_POST['descricao'];

$completa = 'N';
if (isset($_POST['completa'])) {
   $completa = 'S';
}

$query = $conexao->prepare('INSERT INTO tarefas (descricao, completa) VALUES (:descricao, :completa)');

$query->bindValue(':descricao', $descricao);
$query->bindValue(':completa', $completa);

$query->execute();

// redireciona para a pagina listatarefas.php 
header("Location: ./listatarefas.php");
exit();
?>