Create database pagamento;
use pagamento;

Create table Cliente(
idclin int (4) not null auto_increment primary key,
nome varchar(35) not null,
cpf varchar(11) not null unique,
valordivida decimal (8,2) not null,
valorpago decimal (8,2) not null,
porc double not null
)Engine=Innodb;
