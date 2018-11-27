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
PERMISSAO boolean not null default true,
PONTOS int(5) not null default 0
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

insert into AREA (AREA)
VALUES ('Matemática'), 
('Português'),
('Física'),
('Química'),
('História'),
('Geografia'),
('Inglês'),
('Espanhol'),
('Conhecimentos Gerais'),
('Biologia'),
('Filosofia'),
('Sociologia'),
('Cidadania'),
('Educação Física');

insert into ASSUNTO (ASSUNTO, ID_AREA)
values ('Trigonometria', 1),
    ('Geometria', 1),
    ('Função de 1º grau', 1),
    ('Função de 2º grau', 1),
    ('Polinômios', 1),
    ('Multiplicação', 1),
    ('Divisão', 1),
    ('Soma', 1),
    ('Subtração', 1),
    ('Juros Simples', 1),
    ('Juros Compostos', 1),
    ('Ortografia', 2),
    ('Uso de "m" ou "n"', 2),
    ('Uso de "ch" ou "x"', 2),
    ('Velocidade', 3),
    ('Força', 3),
    ('Óptica', 3),
    ('Tabela Periódica', 4),
    ('Elementos alcalinos', 4),
    ('Elementos de transição interna', 4),
    ('Elementos de transição externa', 4),
    ('História do Brasil', 5),
    ('Independência do Brasil', 5),
    ('Revolução Francesa', 5),
    ('Idade das Trevas', 5),
    ('Império Bizantino', 5),
    ('Divisão Geopolítica', 6),
    ('Divisão Geográfica', 6),
    ('Hidrografia do Brasil', 6),
    ('Geologia', 6),
    ('Verbo "to be"', 7),
    ('Infinitivo', 7),
    ('Pronomes de tratamento', 7),
    ('Pronomes pessoais', 7),
    ('Pronomes possessivos', 7),
    ('Pronomes pessoais', 8),
    ('Pronomes possessivos', 8),
    ('Pronomes de tratamento', 8),
    ('Política', 9),
    ('Mundo', 9),
    ('Seres vivos', 10),
    ('Célula', 10),
    ('Zoologia', 10),
    ('Botânica', 10),
    ('Platão', 11),
    ('Sócrates', 11),
    ('Descartes', 11),
    ('Karl Marx', 12),
    ('Engels', 12),
    ('Adam Smith', 12),
    ('Ética', 13),
    ('Moral', 13),
    ('Basquetebol', 14),
    ('Futebol', 14),
    ('Volêibol', 14),
    ('Handebol', 14);