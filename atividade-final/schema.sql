
CREATE DATABASE loja 
    WITH OWNER = postgrest 
    ENCODING = 'UTF8' 
    CONNECTION LIMIT = -1 
    IS_TEMPLATE = false;

CREATE SCHEMA loja AUTHORIZATION postgres;

CREATE SCHEMA IF NOT EXISTS loja;

CREATE TABLE produto (
    id SERIAL PRIMARY KEY,
    nome varchar(100) not null,
    preco decimal(10,2),
    imagem varchar(50)
)

INSERT INTO produto(nome, preco, imagem) 
  VALUES ('Tennis Nike Preto', 230, 'tenisA.jpg');


INSERT INTO produto(nome, preco, imagem) 
  VALUES ('Tennis Nike Vermelho', 340, 'tenisN.gif');