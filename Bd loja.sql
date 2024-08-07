Create database bd_loja;
use bd_loja;

create table tb_funcionario(
id_funcionario int primary key auto_increment,
nm_funcionario varchar(45) not null,
nm_sobrenome varchar(45) not null,
dt_nascimento date not null,
ds_cargo varchar(30) not null,
nr_salario decimal not null,
dt_admissao date not null,
nm_senha text not null
nm_login varchar(45) not null
);

create table tb_cliente(
id_cliente int primary key auto_increment,
nm_cliente varchar(45) not null,
nm_sobrenome varchar(45) not null,
nm_email varchar(50) not null,
nr_telefone varchar(11) not null,
nm_endereco varchar(50) not null
);

create table tb_fornecedor(
id_fornecedor int primary key auto_increment,
nm_fornecedor varchar(45) not null,
nm_contato varchar(45) not null,
nm_email varchar(50) not null,
nr_telefone varchar(11) not null,
nm_endereco varchar(50) not null
);