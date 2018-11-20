-- Gera��o de Modelo f�sico
-- Sql ANSI 2003 - brModelo.

CREATE DATABASE knex;

USE knex;

CREATE TABLE USUARIO (
ID_USUARIO int(5) PRIMARY KEY auto_increment,
USUARIO varchar(12) not null,
SENHA varchar(15) not null,
NOME varchar(40) not null,
CPF varchar(11) not null,
EMAIL varchar(50) not null,
PERMISSAO boolean not null,
PONTOS int(5) not null
);

CREATE TABLE AREA (
ID_AREA int(5) PRIMARY KEY auto_increment,
AREA varchar(50) not null
);

CREATE TABLE ASSUNTO (
ID_ASSUNTO int(5) PRIMARY KEY auto_increment,
ASSUNTO varchar(50) not null,
ID_AREA int(5) not null,
FOREIGN KEY(ID_AREA) REFERENCES AREA (ID_AREA)
);

CREATE TABLE QUESTAO (
ID_QUESTAO int(5) PRIMARY KEY auto_increment,
PERGUNTA varchar(400) not null,
RESPOSTA_CERTA varchar(400) not null,
RESPOSTA2 varchar(400) not null,
RESPOSTA3 varchar(400) not null,
RESPOSTA4 varchar(400) not null,
RESPOSTA5 varchar(400) not null,
ID_USUARIO int(5) not null,
ID_ASSUNTO int(5) not null,
FOREIGN KEY(ID_USUARIO) REFERENCES USUARIO (ID_USUARIO),
FOREIGN KEY(ID_ASSUNTO) REFERENCES ASSUNTO (ID_ASSUNTO)
);

CREATE TABLE DENUNCIA (
ID_DENUNCIA int(5) PRIMARY KEY auto_increment,
MOTIVO varchar(30) not null,
EXPLICACAO varchar(300) not null,
ID_QUESTAO int(5) not null,
ID_USUARIO int(5) not null,
FOREIGN KEY(ID_QUESTAO) REFERENCES QUESTAO (ID_QUESTAO),
FOREIGN KEY(ID_USUARIO) REFERENCES USUARIO (ID_USUARIO)
);