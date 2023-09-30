CREATE DATABASE Formulario;
use Formulario;

CREATE TABLE usuario (
  id int not null auto_increment,
  primary key (id),
  nome varchar(45),
  sobrenome varchar(45),
  idade int,
  cep int,
  rua varchar(50),
  estado varchar(15),
  cidade varchar(30),
  numero int,
  cpf varchar(11),
  genero varchar(15), 
  complemento varchar(30) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
select * from usuario;







