
CREATE DATABASE IF NOT EXISTS `FormDataB` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `FormDataB`;

CREATE TABLE `usuarios` (
  id_user int NOT NULL AUTO_INCREMENT,
  nome varchar(100) NOT NULL,
  sobrenome varchar(100) not null,
  email varchar(100) NOT NULL,
  senha varchar(32) NOT NULL,
  CPF int(11) NOT NULL,
  nascimento int(8) not null,                                                                                                     
  numero int(9) not null,
  CEP int(8) not null,
  rua varchar(50) not null,
  bairro varchar(50) not null,
 cidade varchar(50) not null,
 esstado varchar(15) not null,
 complemento varchar(100) not null,
  Primary key (id_user),
  unique key (email, CPF)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

