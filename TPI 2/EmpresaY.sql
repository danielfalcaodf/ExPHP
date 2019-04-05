create database EmpresaY;
use EmpresaY;

Create table funcionarios (
idfunc int(4) not null auto_increment primary key,
nome varchar(30) not null,
cpf varchar(11) not null unique,
salario decimal(8,2) not null)Engine=Innodb;
