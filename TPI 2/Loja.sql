create database Loja;
use Loja;
create table Marca(
idmarca int(4) not null auto_increment primary key,
nome varchar (50) not null)Engine=Innodb;

create table Produtos(
idprod int (4) not null auto_increment primary key,
nome varchar (50) not null unique,
precovenda decimal (6,2) not null,
idmarca int (4) not null,
foreign key(idmarca) references marca(idmarca) on delete cascade ) engine=Innodb;


insert into Marca (idmarca,nome)
value (001,"daniel");
insert into Produtos (idprod,nome,precovenda,idmarca)
value (002,"daniel1",23.51,001);

drop database Loja;

select P.nome, M.nome from produtos as P inner join Marca as M on M.idmarca= Idmarca;