<?php

$db_host = '10.10.0.70';
$db_nome = 'test';
$db_user = 'aluno.php';
$db_senha = 'php2023*';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);

$query = $conexao->prepare('SELECT * FROM tarefas');
$query->execute();
?>
    <a href="./inseretarefa.html">Nova tarefa.</a>
    <TABLE>
        <TR>
            <TD>Descricao</TD>
            <TD>Completa</TD>
            <TD></TD>
            <TD></TD>
        </TR>
        <?php
            while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
                echo 
                '<TR>
                    <TD>'.$linha['Descricao'].'</TD>
                    <TD>'.$linha['Completa'].'</TD>
                    <TD><a href="./apagatarefa.php?TarefaID='.$linha['TarefaID'].'">apaga</a></TD>'.'
                    <TD><a href="./atualizatarefa.php?TarefaID='.$linha['TarefaID'].'">atualiza</a><TD>'.'
                </TR>';
            }
        ?>
    </TABLE>