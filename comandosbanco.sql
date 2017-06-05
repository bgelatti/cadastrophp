create database cadastro;

create table produto (
	id int not null auto_increment primary key,
	nome varchar(255),
	preco double
);

create table pessoa (
	id int not null auto_increment primary key,
	nome varchar(255),
	cpf_cnpj varchar(20),
	rg_ie varchar(20),
	dt_nascimento varchar(30),
	endereco varchar(255),
	telefone varchar(20)
);