CREATE DATABASE escola
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;

CREATE SCHEMA escola AUTHORIZATION postgres;

CREATE SCHEMA IF NOT EXISTS escola;

CREATE TABLE aluno (
                     id_alu SERIAL NOT NULL PRIMARY KEY, 
                     nome_alu VARCHAR(50) NOT NULL, 
                     cidade_alu VARCHAR(30), 
                     tel_alu VARCHAR(30), 
                     sexo_alu VARCHAR(10),
                     email_alu VARCHAR(50)
                   );

INSERT INTO aluno(nome_alu, cidade_alu, tel_alu, sexo_alu, email_alu) 
  VALUES ('Jonathas', 'Manaus', '988410440', 'M','jbc@icomp.ufam.edu.br');