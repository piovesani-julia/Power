create database power;
use power;

/*
		Tabelas:
        Livros(Produtos);        
*/

/*
ISBN
descr - babulhos q contam um pouco da histório do livro 
De estudo em vermelho até (....) - Ruh tem esses livros 
*/

create table livros(
isbn int not null auto_increment,
titulo varchar(100) not null,
nautor varchar(100) not null,
descr varchar(400),
editora varchar(35),
primary key (isbn)
);

-- parte chata insert into 

insert into livros (titulo,nautor,descr,editora)
values  ('A CUlpa é das Estrelas ','John Green','foda -se',''),
		('Harry Potter e o Prisioneiro de Azkarban',' J.K.Rowling','DFC','Rocco'),
        ('Insurgente','Veronica Roth','','Rocco'),
        ('Divirgente','Veronica Roth','n li','Rocco'),
        ('Insurgente','Veronica Roth','n li','Rocco'),
		('Convigente','Veronica Roth','n li','Rocco'),
		('A Seleção','Kiera Cass','','Seguinte'),
		('A Elite','Kiera Cass','','Seguinte'),
        ('A Escolha ','Kiera Cass','','Seguinte'),
        ('A Herdeira','Kiera Cass','','Seguinte'),
        ('Marly & Eu ','Jonhon Grogan','Vc chora pra caralho lendo isso ','Ediouro'),
		('Buracos Negros','Stephen Hawking','Ainda n li','Intrinca'), -- melhor editora 
		('Os Relógios ','Agatha Cristie ','Um caso de Hercule Poirot','GloboLivros'),
		('Contos de Kolimá','Varlam Chalámov','nunca nem li','editora34'),
        ('Clube Da Luta','Chuck Palahniuk','','LeYa');
	       ('Extraordinário','R.J.Palacio','Intriseca','Ñ julgue um menino pela cara');
       
/*('Um Estudo em Vermelho','Artur Conon Doyle','','Zahar'),*/