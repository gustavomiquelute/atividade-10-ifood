create database ifood;
use ifood;

create table usuario (
    id_usuario int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null unique,
    telefone varchar(20) not null unique,
    endereco varchar(200) not null
);

create table restaurante (
    id_restaurante int primary key auto_increment,
    nome varchar(100) not null,
    categoria varchar(50) not null unique,
    endereco varchar(200) not null,
    telefone varchar(20) not null unique
);

create table pedido (
    id_pedido int primary key auto_increment,
    data_pedido datetime not null,
    status varchar(20) not null,
    valor decimal(10,2) not null,
    cliente_id int,
    restaurante_id int,
    foreign key (cliente_id) references usuario(id_usuario),
    foreign key (restaurante_id) references restaurante(id_restaurante)
);

