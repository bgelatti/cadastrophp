create database cadastro;

create table produto (
	id int not null auto_increment primary key,
	nome varchar(255),
	preco double
);