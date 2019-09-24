create database guido;
use guido;

create table livros(
id int not null auto_increment,
isbn varchar(100) not null,
titulo varchar(100) not null,
autor varchar(30) not null,
sobrenome varchar(75) not null,
editora varchar(75),
preco varchar (20),
primary key (id)
) DEFAUlT CHARSET = utf8;

CREATE TABLE output_images (
  imageId int(11) NOT NULL,
  imageType varchar(255) NOT NULL,
  imageData longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET= utf8;
-- Indexes for table `output_images`
ALTER TABLE output_images
  ADD PRIMARY KEY (imageId);

insert into livros(isbn,titulo,autor,sobrenome,editora,preco)
Values('978852096','Os Filhos do Imperador','Claire','Messud','Nova Frontera','35,00');
         
insert into livros(isbn,titulo,autor,sobrenome,editora)
Values ('','','','',''),
			('','','','',''),
			('','','','',''),
			('','','','',''),
			('','','','','');
            
insert into livros(isbn,titulo,autor,sobrenome,editora)
Values ('','','','',''),
			('','','','',''),
			('','','','',''),
			('','','','',''),
			('','','','','');
            
insert into livros(isbn,titulo,autor,sobrenome,editora)
Values ('','','','',''),
			('','','','',''),
			('','','','',''),
			('','','','',''),
			('','','','','');