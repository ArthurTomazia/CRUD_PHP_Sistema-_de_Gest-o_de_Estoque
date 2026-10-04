CREATE DATABASE estoque;
USE estoque;

CREATE TABLE produto(
    id int auto_increment primary key,
    nome varchar(255) not null,
    categori varchar(255) not null,
    descrição varchar(255) not null,
    preco decimal(10,2) not null,
    estoque int not null,
    data_validade date not null
);
