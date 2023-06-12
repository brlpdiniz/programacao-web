# ED - 2º Bimestre

# Tabela de Funcionários

## FuncionarioID
- _____________

## Nome
- _____________

## Sobrenome
- _____________

## CPF
- _____________

## Setor
- _____________ (option)

## Tipo
- _____________ (option)


CREATE TABLE Funcionarios (
    FuncionarioID int NOT NULL AUTO_INCREMENT,
    Nome varchar(255),
    Sobrenome varchar(255),
    CPF varchar(255),
    Setor varchar(255), /*Administrativo/Producao/Logistica*/
    TIPO varchar(255), /*Estagiario/Funcionario/Terceirizado*/
PRIMARY KEY (FuncionarioID)
);

cp /home/brlpdiniz/Documentos/code/git/programacao-web/2Bimestre/"Estudo Dirigido"/ed-funcionarios/teste-ed.php /opt/lampp/htdocs/exemplos/

<!--https://localhost/exemplos/-->   <!--/opt/lampp/htdocs/-->
<!--https://localhost/phpmyadmin/ -->
