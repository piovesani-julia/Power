create database guido;
use guido;
/*		Tabelas:
        Livros(Produtos);        
*/
/*
ISBN
descr - babulhos q contam um pouco da histório do livro 
*/

create table livros(
id int not null auto_increment,
isbn varchar(100) not null,
titulo varchar(100) not null,
autor varchar(30) not null,
sobrenome varchar(75) not null,
editora varchar(35),
primary key (id)
);
create table imagens(
id tinyint not null auto_increment,
ImgType varchar(25) not null default '',
imgdata mediumblob not null,
primary key (id)
);

select * from imagens;
drop table imagens;
CREATE TABLE output_images (
  imageId int(11) NOT NULL,
  imageType varchar(255) NOT NULL,
  imageData longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `output_images`
--
ALTER TABLE output_images
  ADD PRIMARY KEY (imageId);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `output_images`
--




insert into livros (titulo,autor,sobrenome,editora,isbn)
values  ('A Culpa é das Estrelas ','John','Green','',''),

		('Harry Potter e o Prisioneiro de Azkarban',' J.K','Rowling','DFC','Rocco'),

        ('Divirgente','Veronica' ,'Roth','Rocco'),

        ('Insurgente','Veronica' ,'Roth','Rocco'),

		('Convigente','Veronica' ,'Roth','Rocco'),

		('A Seleção','Kiera' ,'Cass','Seguinte'),

		('A Elite','Kiera' ,'Cass','Seguinte'),

        ('A Escolha ','Kiera' ,'Cass','','Seguinte'),

        ('A Herdeira','Kiera' ,'Cass','','Seguinte'),

        ('Marly & Eu ','Jonhon' ,'Grogan','Vc chora pra caralho lendo isso ','Ediouro'),

		('Buracos Negros','Stephen' ,'Hawking','Ainda n li','Intrinseca'), -- melhor editora

        -- Falta as imagens daqui pra frente  

		('Os Relógios ','Agatha' ,'Cristie ','Um caso de Hercule Poirot','GloboLivros'),
         
		('Contos de Kolimá','Varlam' ,'Chalámov','nunca nem li','editora34'),

        ('Clube Da Luta','Chuck' ,'Palahniuk','','LeYa');

insert into  livros(titulo,autor,sobrenome,editora,isbn)
values ('Morte e Vida Severina','João' ,'Cabral Melo Neto','ponto de leitura',''),

		('Dom Casmurro','Machado' ,'de Assis','L&PM',''),

        ('Hamlet','Willian' ,'Shakespeare','L&PM',''),

        ('Capitães da Areia ','Jorge' ,'Amado ','ComphaiaDeBolso',''),

        ('Poemas','Gregório' ,'de Matos ','Martin Claret','Boca do Inferno -- Amo esse cara'),

        ('A Cidade e as Serras','Eça' ,'de Queirós','Editora Avenida','foda-se'),

        ('Viagem ao Centro da Terra ','Júlio' ,'Verme','EuLeio','yo no ligo'),

        ('O cortiço','Aluísio' ,'Azevedo','Editora Moderna ',''),

        ('Memórias póstumas de Brás Cubas ','Machado' ,'de Assis','Editota Moderna','Foda -se'),

        ('Vidas Secas ','Gracilio' ,'Ramos ','Record','Caralho');

insert into livros(titulo,autor,sobrenome,editora,descr)
values ('A Droga do Amor','Pedro' ,'Bandeira ','Editora Moderna',''),

	   ('Meu pé de Laranja Lima ','José' ,'de Vasconcelos','Melhoramentos',''),

       ('Como Eu Era Antes de Você','Jojo' ,'Moyes','Intriseca',''),

       ('Estação Brasil ','Domingos' ,'Pellegrini','FTD',''),

       ('Extraordinário','R.J.','Palacio','Intriseca','Ñ julgue um menino pela cara');

insert into livros(titulo,autor,sobrenome,editora,isbn)
values  ('Um Estudo em Vermelho','Artur' ,'Conon Doyle','Zahar',''),

	    ('Os Sinal dos Quatro','Artur' ,'Conon Doyle','Zahar',''),

        ('As aventuras de Sherlock Holmes','Artur' ,'Conon Doyle','Zahar',''),

        ('Memórias de Sherlock Holmes','Artur' ,'Conon Doyle','Zahar',''),

        ('O cão dos Baskerville','Artur' ,'Conon Doyle','Zahar',''),

        ('A volta de Sherlock Holmes','Artur' ,'Conon Doyle','Zahar',''),

        ('O Vale do Medo','Artur' ,'Conon Doyle','Zahar',''),

        ('Os Últimos Casos de Sherlock Holmes','Artur' ,'Conon Doyle','Zahar',''),

        ('Histórias de Sherlock Holmes','Artur' ,'Conon Doyle','Zahar','');