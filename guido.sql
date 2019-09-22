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

CREATE TABLE output_images (
  imageId int(11) NOT NULL,
  imageType varchar(255) NOT NULL,
  imageData longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Indexes for table `output_images`
ALTER TABLE output_images
  ADD PRIMARY KEY (imageId);