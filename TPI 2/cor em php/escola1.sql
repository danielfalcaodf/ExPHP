create database escola;
use escola;

create table matricula
(
nome varchar (35) not null,
matricula int (20)not null unique,
disciplina varchar (20)not null,
totaldeaulas int (20)not null,
totaldefaltas int (20)not null,
frequencia double (5,2) not null
)engine=innodb;

drop database escola;

select * from matricula ;
select matricula,totaldeaulas,totaldefaltas from matricula ;
select count(*)from matricula where totaldeaulas;