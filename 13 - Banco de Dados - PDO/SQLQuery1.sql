
create database dbphp7;

create table tb_usuario (
	idusuario int not null identity primary key,
	deslogin varchar(64) not null,
	dessenha varchar(256) not null,
	dtcadastro datetime not null default getdate()
);

insert into tb_usuario(deslogin, dessenha) values('pedro.torres', '123456');

select * from tb_usuario;