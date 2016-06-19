CREATE TABLE categoriaVeiculo (
  idCatVeiculo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descCatVeiculo VARCHAR(20) NOT NULL,
  PRIMARY KEY(idCatVeiculo)
);

CREATE TABLE Cliente (
  idCliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nomeCliente VARCHAR(45) NOT NULL,
  CPF VARCHAR(45)  NOT NULL,
  endereco VARCHAR(255) NOT NULL,
  celular VARCHAR(45) NOT NULL,
  telefone VARCHAR(45) NULL,
  email VARCHAR(255) NOT NULL,
  dataNascimento DATE NOT NULL,
  sexo CHAR(1) NOT NULL,
  PRIMARY KEY(idCliente)
);

CREATE TABLE Locacao (
  idLocacao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Cliente_idCliente INTEGER UNSIGNED NOT NULL,
  Veiculo_idVeiculo INTEGER UNSIGNED NOT NULL,
  dataLocacao TIMESTAMP NOT NULL,
  dataRetirada DATE NOT NULL,
  dataDevolucao DATE NULL,
  kmRetirada INTEGER UNSIGNED NULL,
  kmDevolucao INTEGER UNSIGNED NULL,
  kmLivre BOOLean NULL,
  PRIMARY KEY(idLocacao),
  INDEX Locacao_FKIndex1(Cliente_idCliente),
  INDEX Locacao_FKIndex2(Veiculo_idVeiculo)
);

CREATE TABLE Marca (
  idMarca INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nomeMarca VARCHAR(20) NOT NULL,
  PRIMARY KEY(idMarca)
);

CREATE TABLE Usuario (
  idUsuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nomeUsuario VARCHAR(45) NOT NULL,
  usuario VARCHAR(20) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  PRIMARY KEY(idUsuario)
);

CREATE TABLE Veiculo (
  idVeiculo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  categoriaVeiculo_idCatVeiculo INTEGER UNSIGNED NOT NULL,
  marca_idMarca INTEGER UNSIGNED NOT NULL,
  modelo VARCHAR(20) NOT NULL,
  ano INTEGER UNSIGNED NOT NULL,
  cor VARCHAR(20) NOT NULL,
  portas INTEGER UNSIGNED NOT NULL,
  opcionais VARCHAR(255) NULL,
  placa VARCHAR(7) NOT NULL,
  valorLivre INTEGER UNSIGNED NOT NULL,
  valorKm NUMERIC NOT NULL,
  disponivel BOOLean NULL,
  PRIMARY KEY(idVeiculo),
  INDEX Veiculo_FKIndex1(marca_idMarca),
  INDEX Veiculo_FKIndex2(categoriaVeiculo_idCatVeiculo)
);


INSERT INTO categoriaVeiculo (descCatVeiculo) VALUES ('Passeio');

INSERT INTO Marca (nomeMarca) VALUES ('GM');

INSERT INTO Veiculo VALUES (1,1,1,'Celta',2015,'Preto',4,'','iep0598',500,50,1);