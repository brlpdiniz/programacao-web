
USE 'test' ;
CREATE TABLE Funcionarios (
    FuncionarioID int NOT NULL AUTO_INCREMENT,
    Nome varchar(255),
    Sobrenome varchar(255),
    CPF varchar(255),
    Setor varchar(255), /*Administrativo/Producao/Logistica*/
    TIPO varchar(255), /*Estagiario/Funcionario/Terceirizado*/
PRIMARY KEY (FuncionarioID)
);