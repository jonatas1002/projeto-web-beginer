CREATE TABLE nivel_acesso(
	cod_acesso int not null PRIMARY KEY AUTO_INCREMENT,
    nivel varchar(255) not null,
    descricao varchar(255) not null
);

CREATE TABLE usuarios(
	cod_usuario int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255) not null,
    usuario varchar(255) not null,
    senha varchar(255) not null,
    ativo boolean DEFAULT false,
    nivel int not null,
    FOREIGN KEY(nivel) REFERENCES nivel_acesso(cod_acesso)
);

CREATE TABLE produto(
	cod_produto int NOT null PRIMARY KEY AUTO_INCREMENT,
    produto varchar(255) not null,
    peso int,
    formula int   
);

CREATE TABLE situacao(
	cod_situacao int NOT null PRIMARY KEY AUTO_INCREMENT,
    situacao varchar(20),
    descricao varchar(255)
);

CREATE TABLE pedido(
	cod_pedido int NOT null PRIMARY KEY AUTO_INCREMENT,
    cod_produto int NOT null,
    cod_usuario int NOT null,
    cod_situacao int NOT null,
    quatidade int NOT null,
    data_pedido date,
    data_entrega date,
    observacao varchar(255), cliente varchar(100),
    FOREIGN KEY(cod_produto) REFERENCES produto(cod_produto),
    FOREIGN KEY(cod_usuario) REFERENCES usuarios(cod_usuario),
	FOREIGN KEY(cod_situacao) REFERENCES situacao(cod_situacao)
);