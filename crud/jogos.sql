create database dbjogos;

use dbjogos;


create table tblcategorias(
idcategorias int not null auto_increment primary key,
tipo varchar(100) not null


);


create table tblusuarios(
idusuarios int not null auto_increment primary key,
nome varchar(100) not null,
usuario varchar(100) not null,
senha varchar (100) not null

);


insert into tblcontatos(
   nome,
   email,
   celular
) 
values(
 'thiago',
 'thiagobueno@123',
 '12222222222'


);


create table tblcontatos(
idcontatos int not null auto_increment primary key,
nome varchar(100) not null,
email varchar(30) not null,
celular varchar(20) not null

);

drop table tbljogos;




drop table tbljogos;




create table tbljogos(
idjogos int not null auto_increment primary key,
nome varchar(100) not null,
imagem varchar(100) not null,
valor float not null,
dataLancamento date not null,
destaques boolean,
promocao float,
descricao text not null

);
insert into tbljogos ( nome, valor, dataLancamento, destaques, promocao, descricao, ) values ( 'thiago', '', '', 0, '10', '', );


select * from tbljogos order by idjogos desc;

insert into tbljogos ( nome, valor, dataLancamento, destaques, promocao, descricao ) values ( 'thiago', '', '', '', '1000', '' );


["nome"] => string (6) "thiago" ["valor"] => bool (false) ["dataLancamento"] => bool (false) ["destaques"] => string ( 0) "" ["promocao"] => string (2) "20" ["descricao"] => NULL ["id"] => int (0)
