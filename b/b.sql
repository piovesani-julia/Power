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

insert into drogas(nome, lote, produtor, traficante)
values( 'maconha', 20199658, 'ujhkrfjhfryhg','roger'),
			( 'cocaina', 20199658, 'ujhkrfjhfryhg','roger'),
			( 'crack', 20199658, 'ujhkrfjhfryhg','roger'),
			( 'nicotina', 20199658, 'ujhkrfjhfryhg','roger'),
			( 'metafetamina', 20199658, 'ujhkrfjhfryhg','roger'),
			( 'morfina', 20199658, 'ujhkrfjhfryhg','roger'),
			( 'lsd', 20199658, 'ujhkrfjhfryhg','roger'),
			( 'heroina', 20199658, 'ujhkrfjhfryhg','roger'),
			( 'cha de cogumelo', 20199658, 'ujhkrfjhfryhg','roger'),
			( 'ecstasy', 20199658, 'ujhkrfjhfryhg','roger'),
			( 'inalantes', 20199658, 'ujhkrfjhfryhg','roger'),
			( 'anfetaminas', 20199658, 'ujhkrfjhfryhg','roger'),
			( 'opio', 20199658, 'ujhkrfjhfryhg','roger'),
			( 'cloroformio', 20199658, 'ujhkrfjhfryhg','roger');