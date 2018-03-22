CREATE DATABASE db_ordemdeservico;
USE db_ordemdeservico;
CREATE TABLE aberta(
  id          INT           NOT NULL AUTO_INCREMENT,
  nome   VARCHAR(200)  NOT NULL,
  descricao  VARCHAR(200) NOT NULL,
  endereco  VARCHAR(45) NOT NULL,
  telefone  VARCHAR(45) NOT NULL,
  dataAbertura DATE NOT NULL,
  problemaConstatado VARCHAR(200),
  solucao VARCHAR(200),
  valor DECIMAL (10,2),
  dataFechamento DATE NOT NULL ,
  PRIMARY KEY (id)
);

CREATE TABLE usuarios(
  id    INT           NOT NULL  AUTO_INCREMENT,
  email VARCHAR(200)  NOT NULL,
  senha VARCHAR(200)  NOT NULL,
  PRIMARY KEY (id)
);
insert into usuarios (email, senha) values('covinha@gmail.com', '23b7542e74a53829476a0deb0c05f6b4');
insert into usuarios (email, senha) values('welinton@gmail.com', '53be6db729b8f5f688f2a41553ecac8f');