create database biqueira;

use biqueira;

create table drogas(
id int not null auto_increment,
nome varchar(100) not null,
lote int not null,
produtor varchar(75) not null,
traficante varchar(35),
primary key (id)
);

create table bebidas(
id int not null auto_increment,
nome varchar(100) not null,
lote varchar(30) not null,
produtor varchar(75) not null,
primary key (id)
);

insert into drogas(id, nome, lote, produtor, traficante)
values( 'maconha', 20199658, 'ujhkrfjhfryhg','roger')
 values( 'cocaina', 20199658, 'ujhkrfjhfryhg','roger')
 values( 'crack', 20199658, 'ujhkrfjhfryhg','roger')
 values( 'nicotina', 20199658, 'ujhkrfjhfryhg','roger')
 values( 'metafetamina', 20199658, 'ujhkrfjhfryhg','roger')
 values( 'morfina', 20199658, 'ujhkrfjhfryhg','roger')
 values( 'lsd', 20199658, 'ujhkrfjhfryhg','roger')
 values( 'heroina', 20199658, 'ujhkrfjhfryhg','roger')
 values( 'cha de cogumelo', 20199658, 'ujhkrfjhfryhg','roger')
 values( 'ecstasy', 20199658, 'ujhkrfjhfryhg','roger')
 values( 'inalantes', 20199658, 'ujhkrfjhfryhg','roger')
 values( 'anfetaminas', 20199658, 'ujhkrfjhfryhg','roger')
 values( 'opio', 20199658, 'ujhkrfjhfryhg','roger')
 values( 'cloroformio', 20199658, 'ujhkrfjhfryhg','roger')