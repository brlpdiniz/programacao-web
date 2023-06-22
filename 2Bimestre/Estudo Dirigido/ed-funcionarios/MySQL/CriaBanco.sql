USE test;
CREATE TABLE Funcionarios (
    FuncionarioID int NOT NULL AUTO_INCREMENT,
    Nome varchar(255) NOT NULL,
    Sobrenome varchar(255) NOT NULL,
    CPF varchar(255) NOT NULL,
    Setor varchar(255) NOT NULL, /*Administrativo/Producao/Logistica*/
    TIPO varchar(255) NOT NULL, /*Estagiario/Funcionario/Terceirizado*/
PRIMARY KEY (FuncionarioID)
);