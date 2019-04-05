create database escola;
use escola;

create table matricula
(
matricula int (20)not null unique,
disciplina varchar (20)not null,
totaldeaulas int (20)not null,
totaldefaltas int (20)not null
)engine=innodb;

drop database escola;