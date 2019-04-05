create database Acervo;
use Acervo;


create table Usuario(
idusuario int (4) not null auto_increment primary key,
nome varchar (50) not null,
CPF  varchar (11) not null unique)engine=innodb;

create table Genero(
idgenero int (4) not null auto_increment primary key,
nome varchar (50) not null
)engine=innodb;

create table Editora(
ideditora int (4) not null auto_increment primary key,
nome varchar (50) not null unique
)engine=innodb;

create table Colecao(
idcolecao int (4) not null auto_increment primary key,
idusuario int  (4) not null,
foreign key (idusuario) references usuario(idusuario) on delete cascade) engine=innodb;

create table acervo1(
idacervo int (4) not null auto_increment primary key,
idcolecao int (4) not null,
titulo varchar (25) not null,
ano int (4) not null,
idgenero int (4) not null,
ideditora int (4) not null,
valor decimal (8,2) not null,
foreign key (idcolecao) references Colecao(idcolecao) on delete cascade,
foreign key (idgenero) references Genero(idgenero) on delete cascade,
foreign key (ideditora) references Editora(ideditora) on delete cascade)engine=innodb;



 insert into Usuario (idusuario,nome,CPF)
 value (001,"daniel",031313121); 
 insert into Usuario (idusuario,nome,CPF)
 value (002,"Naomi",3131144441); 
 insert into Usuario (idusuario,nome,CPF)
 value (003,"Elias",141515144);
 
 
insert into Colecao (idcolecao,idusuario)
 value (001,001);
 
 insert into Colecao (idcolecao,idusuario)
 value (002,001);
 
 insert into Colecao (idcolecao,idusuario)
 value (003,002);
 
 insert into Colecao (idcolecao,idusuario)
 value (004,002);
 
 insert into Colecao (idcolecao,idusuario)
 value (005,003);
 
 insert into Colecao (idcolecao,idusuario)
 value (006,003);
 
 insert into Genero (idgenero,nome)
 value (001,"card game");
  insert into Genero (idgenero,nome)
 value (002,"computadores");
  insert into Genero (idgenero,nome)
 value (003,"CPU");
  insert into Genero (idgenero,nome)
 value (004,"hobbie");
  
insert into Editora (idEditora,nome)
 value (001,"Ana");
 
 insert into Editora (idEditora,nome)
 value (002,"Gabi");
 
 insert into Editora (idEditora,nome)
 value (003,"Elias");
 
 insert into acervo1 (idAcervo,idcolecao,titulo,ano,idgenero,ideditora,valor)
 value (001,001,"Duelo",2018,001,003,80.00);
 
insert into acervo1 (idAcervo,idcolecao,titulo,ano,idgenero,ideditora,valor)
 value (002,002,"Enermax",2018,001,002,13.00);
 
  insert into acervo1 (idAcervo,idcolecao,titulo,ano,idgenero,ideditora,valor)
 value (003,003,"Marca",2015,002,003,40.00);
 
   insert into acervo1 (idAcervo,idcolecao,titulo,ano,idgenero,ideditora,valor)
 value (004,003,"GOL",2012,004,001,4000.00);
 
insert into acervo1 (idAcervo,idcolecao,titulo,ano,idgenero,ideditora,valor)
 value (005,003,"Show",2014,004,003,50.00);
 
   insert into acervo1 (idAcervo,idcolecao,titulo,ano,idgenero,ideditora,valor)
 value (006,004,"NASA",2017,004,001,170.00);
 
   insert into acervo1 (idAcervo,idcolecao,titulo,ano,idgenero,ideditora,valor)
 value (007,004,"Google",2010,003,001,600.00);
 
  insert into acervo1 (idAcervo,idcolecao,titulo,ano,idgenero,ideditora,valor)
 value (008,004,"Java",2009,001,002,62.00); 

  insert into acervo1 (idAcervo,idcolecao,titulo,ano,idgenero,ideditora,valor)
 value (009,004,"C#",2015,001,001,45.00);


