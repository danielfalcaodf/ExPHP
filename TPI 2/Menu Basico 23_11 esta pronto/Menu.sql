create database Menu;

use Menu;

create table Cadastro (
id int(4) not null auto_increment primary key,
nome varchar(35) not null,
cpf varchar(20) not null,
rg varchar(9) not null,
email varchar (45) not null,
idade int (3) not null )engine=innodb;

select * from Cadastro;

drop table Cadastro;
delete from Cadastro where cpf="123456789";