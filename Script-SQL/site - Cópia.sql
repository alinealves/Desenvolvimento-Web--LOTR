create schema site;
use site;

create table user(
id int auto_increment not null,
login varchar(30) not null,
senha varchar(30) not null,
primary key(id)
);

create table faleconosco(
id int not null auto_increment,
nome varchar(30),
email varchar(50),
mensagem varchar(200),
primary key(id)
);


create table email(
email varchar(30),
primary key(email)
);

insert into user values (1, 'admin', 'nimda');

create table noticias(
id int auto_increment,
noticias varchar(2000) not null,
titulo varchar(100) not null,
publicado int,
primary key(id)
);

create table comentario(
id_com int not null,
comentario varchar(1000) not null,
autor varchar(30),
id_not int not null,
primary key(id_com),
foreign key(id_not) references noticias(id)
);