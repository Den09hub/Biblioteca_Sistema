create database db_biblioteca;
use db_biblioteca;

create table livros (
	id_livro int auto_increment not null,
    titulo varchar(100) not null,
    autor varchar(100),
    data_publicacao date not null,
    data_chegada date not null,
    genero varchar(50) not null,
    sinopse text not null,
    primary key (id_livro)
);

select * from livros;