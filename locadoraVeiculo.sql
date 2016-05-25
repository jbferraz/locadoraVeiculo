CREATE TABLE categoriaVeiculo (
  idcategoriaVeiculo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descVeiculo VARCHAR(20) NOT NULL,
  PRIMARY KEY(idcategoriaVeiculo)
);

CREATE TABLE Cliente (
  idCliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nomeCliente VARCHAR(45) NOT NULL,
  CPF BIGINT NOT NULL,
  endereco VARCHAR(255) NOT NULL,
  celular INTEGER UNSIGNED NOT NULL,
  telefone INTEGER UNSIGNED NULL,
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
  dataDevolucao DATE NOT NULL,
  kmRetirada INTEGER UNSIGNED NULL,
  kmDevolucao INTEGER UNSIGNED NULL,
  knLivre BOOL NULL,
  PRIMARY KEY(idLocacao),
  INDEX Locacao_FKIndex1(Cliente_idCliente),
  INDEX Locacao_FKIndex2(Veiculo_idVeiculo)
);

CREATE TABLE Marca (
  idMarca INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nomeMarca VARCHAR(20) NOT NULL,
  PRIMARY KEY(idMarca)
);

CREATE TABLE usuario (
  idUsuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nomeUsuario VARCHAR(45) NOT NULL,
  usuario VARCHAR(20) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  PRIMARY KEY(idUsuario)
);

CREATE TABLE Veiculo (
  idVeiculo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  categoriaVeiculo_idcategoriaVeiculo INTEGER UNSIGNED NOT NULL,
  Marca_idMarca INTEGER UNSIGNED NOT NULL,
  modelo VARCHAR(20) NOT NULL,
  ano INTEGER UNSIGNED NOT NULL,
  cor VARCHAR(20) NOT NULL,
  portas INTEGER UNSIGNED NOT NULL,
  opcionais VARCHAR(255) NULL,
  placa VARCHAR(7) NOT NULL,
  valorLivre INTEGER UNSIGNED NOT NULL,
  valorKM NUMERIC NOT NULL,
  disponivel BOOL NULL,
  PRIMARY KEY(idVeiculo),
  INDEX Veiculo_FKIndex1(Marca_idMarca),
  INDEX Veiculo_FKIndex2(categoriaVeiculo_idcategoriaVeiculo)
);


