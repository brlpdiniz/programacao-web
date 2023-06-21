<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>Exemplo Bootstrap</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
        <a class="navbar-brand mx-4" href="#">Navbar</a>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quem somos?</a>
                </li>
            </ul>
        </div>
    </nav>

<?php
$db_host = '10.10.0.70';
$db_nome = 'test';
$db_user = 'aluno.php';
$db_senha = 'php2023*';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);

$query = $conexao->prepare('SELECT * FROM tarefas');
$query->execute();
?>
<table class="table">
<thead>
<th scope="col">Descricao</th>
<th scope="col">Completa</th>
<th scope="col"></th>
<th scope="col"></th>
</thead>
<?php
while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
echo '<TR><TD>'.$linha['Descricao'].'</TD><TD>'.$linha['Completa'].'</TD><TD><a href="./apagatarefa.php?TarefaID='.$linha['TarefaID'].'">apaga</a></TD>'.'<TD><a href="./atualizatarefa.php?TarefaID='.$linha['TarefaID'].'">atualiza</a><TD>'.'</TR>';
}
?>
</TABLE>
<a class="btn btn-primary" href="./inseretarefa.html" role="button">Nova tarefa.</a>
</body>

</html>