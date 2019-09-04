create database power;
use power;

/*
		Tabelas:
        Livros(Produtos);        
*/

/*
ISBN
descr - babulhos q contam um pouco da histório do livro 
*/

create table livros(
isbn int not null auto_increment,
titulo varchar(35) not null,
nautor varchar(100) not null,
descr varchar(400),
primary key (isbn)
);

-- parte chata insert into 

insert into (titulo,nautor,descr)
values (' A CUlpa é das Estrelas ','John Green','foda -se'),
		('Harry Potter e o Prisioneiro de Azkarban',' J.K.Rowling','DFC'),
        ('','',''),
        ('','',''),
        ('','',''),
        ('','',''),
        ('','',''),
        ('','',''),
        ('','',''),
        ('','',''),
        ('','',''),
        ('','',''),
        ('','',''),
        ('','',''),
        ('','',''),
        ('','',''),
        ('','',''),