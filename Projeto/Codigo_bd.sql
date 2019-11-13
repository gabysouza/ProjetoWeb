CREATE DATABASE doacao_sangue;
CREATE TABLE doar(
	Nome varchar(100) NOT NULL,
	Email varchar(50) NOT NULL,
	Senha varchar(21) NOT NULL, 
	Sangue varchar(15) NOT NULL,
	Ano int(5) NOT NULL,
	CEP double NOT NULL
);