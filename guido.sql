create database guido;
use guido;

create table livros(
id int not null auto_increment,
isbn varchar(100) ,
titulo varchar(100),
autor varchar(30) ,
sobrenome varchar(75),
editora varchar(75),
preco varchar (20),
primary key (id)
) DEFAUlT CHARSET = utf8;

 CREATE TABLE IF NOT EXISTS tbl_images (  
  id int  NOT NULL AUTO_INCREMENT,  
  name mediumblob NOT NULL,  
  PRIMARY KEY (id)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
 
 
insert into livros(isbn,titulo,autor,sobrenome,editora,preco)
Values('978852096','Os Filhos do Imperador','Claire','Messud','Nova Frontera','35,00');
         
insert into livros(isbn,titulo,autor,sobrenome,editora,preco)
Values ('9788520922521','Sherlock Holmes Vol.4','Arthur C.','Doyle','Harper Collins','39,90'),
			('9788579801556','Insurgente','Veronica','Roth','Rocco','35,90'),
			('9788565765121','A Elite','Kiera','Cass','Seguinte','30,90'),
			('978857329828','Poemas Gregório de Matos ','Gregório','Matos','Martin Claret','35.00'),
			('9788579801860','Convirgente','Veronica ','Roth','Rocco','30,90');
            
insert into livros(isbn,titulo,autor,sobrenome,editora,preco)
Values ('9788520922538','Sherlock Holmes vol.1','Artur C.','Doye','Harper Collins','39,90'),
			('9788520922514','Sherlock Holmes vol.3','Artur C.','Dolye','Harper Collins','39,90'),
			('9788565765015','A seleção','Kiera','Cass','Seguinte','40,00'),
		    ('9788520922507','Sherlock Holmes vol.2','Artur C.','Dolye','Harper Collins','39,90'),
			('9788535914061','Capitães da Areia ','Jorge','Amado','Companhia de Bolso ','25,50');
            
select * from livros;
drop database guido;
