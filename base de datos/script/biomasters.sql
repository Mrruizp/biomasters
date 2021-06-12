CREATE DATABASE bd_biomaster;

create table cargo
(
cargo_id int primary key auto_increment,
descripcion varchar(100) not null
);

-- ALTER TABLE cargo CHANGE nombre_completo descripcion varchar(100) not null;

create table cliente
(
cliente_id int primary key auto_increment,
nombre_completo varchar(100) not null,
email varchar(200) not null
);

create table usuario
(
usuario_id int primary key auto_increment,
nombres varchar(100) not null,
apellidos varchar(100) not null,
email varchar(200) not null,
cargo_id int,
constraint fk_usuario_cargo_id foreign key(cargo_id) references cargo (cargo_id)
);

create table categoria
(
categoria_id int primary key auto_increment,
nombre varchar(200) not null
);

create table tipo
(
tipo_id int primary key auto_increment,
nombre varchar(200) not null,
categoria_id int,
constraint fk_promocion_categoria_id foreign key(categoria_id) references categoria(categoria_id)
);


create table producto
(
producto_id int primary key auto_increment,
nombre varchar(200) not null,
descripcion varchar(500) not null,
estado char(1) not null,
usuario_id int,
tipo_id int,
categoria_id int,
constraint fk_producto_usuario_id foreign key(usuario_id) references usuario(usuario_id)
);

create table promocion
(
promocion_id int primary key auto_increment,
nombre varchar(200) not null,
descripcion varchar(500) not null,
estado char(1) not null,
producto_id int,
constraint fk_promocion_producto_id foreign key(producto_id) references producto(producto_id)
);

create table comentario
(
comentario_id int primary key auto_increment,
decripcion_comentario varchar(500) not null,
cliente_id int,
producto_id int,
constraint fk_comentario_cliente_id foreign key(cliente_id) references cliente (cliente_id),
constraint fk_producto_id_producto_id foreign key(producto_id) references producto (producto_id)
);

-- alter table usuario
-- add constraint fk_usuario_cargo_id foreign key(cargo_id) references cargo (cargo_id)

create table credenciales_acceso
(
codigo_usuario int primary key auto_increment,
clave varchar(100) not null,
tipo char(1) not null,
estado char(1) not null,
usuario_id int,
constraint fk_credenciales_acceso_usuario_id foreign key(usuario_id) references usuario (usuario_id)
);

create table menu
(
codigo_menu int primary key auto_increment,
nombre varchar(50) not null
);

create table menu_item
(
codigo_menu int not null,
codigo_menu_item int not null,
nombre varchar(100) not null,
archivo varchar(100) not null,
CONSTRAINT pk_menu_item PRIMARY KEY (codigo_menu, codigo_menu_item),
CONSTRAINT fk_menu_item_menu FOREIGN KEY (codigo_menu) REFERENCES menu (codigo_menu)
);

create table menu_item_accesos
(
codigo_menu int NOT NULL,
codigo_menu_item int NOT NULL,
cargo_id int not null,
acceso char(1) not null,
CONSTRAINT pk_menu_item_accesos PRIMARY KEY (codigo_menu, codigo_menu_item, cargo_id),
CONSTRAINT fk_menu_item_accesos_cargo_id FOREIGN KEY (cargo_id) REFERENCES cargo (cargo_id)
);
              
insert into producto(nombre, descripcion, estado)
value('aaaa','bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '0');

-- SCRIPT
insert into cargo
value(1,'ADMINISTRADOR');

insert into usuario
value(1,'renzo','ruiz pastor', 'renzorp_14@hotmail.com');

insert into credenciales_acceso
value(1,(select md5('123')), 'A', 'A',1);

insert into menu
value(1,'inicio');
insert into menu
value(2,'Gestionar');

delete from menu_item_accesos where codigo_menu_item_acceso = 3;
delete from menu_item where codigo_menu_item = 3;

update  menu_item set nombre = 'Promoción' where codigo_menu_item = 3;
insert into menu_item
value(1, 1, 'Inicio', 'menu.principal.view.php');
insert into menu_item
value(2, 1, 'Producto', 'gestionar.producto.view.php');
insert into menu_item
value(2, 2, 'Oferta', 'gestionar.promocion.view.php');

insert into menu_item_accesos
value(1, '1', 1, 1);
insert into menu_item_accesos
value(2, '1', 1, 1);

insert into menu_item_accesos
value(2, '2',1, 1);

insert into credenciales_acceso
value(1,(select md5('123')), 'A', 'A',1);

-- Insert categoria
select * from categoria;

insert into categoria(nombre)
values('Veterinaria');
insert into categoria(nombre)
values('Coagulación');
insert into categoria(nombre)
values('Bioquímica');
insert into categoria(nombre)
values('Cadena de Frío');
insert into categoria(nombre)
values('Hematología');
insert into categoria(nombre)
values('Equipamiento');
insert into categoria(nombre)
values('Inmunología');
insert into categoria(nombre)
values('Repuestos');
insert into categoria(nombre)
values('Gass y Electrolitos');

-- insert tipo
select * from categoria;

insert into tipo(nombre, categoria_id)
values('Analizadores', 1);
insert into tipo(nombre, categoria_id)
values('Controles y calibradores', 1);
insert into tipo(nombre, categoria_id)
values('Reactivos Hematológicos', 1);
insert into tipo(nombre, categoria_id)
values('Analizadores', 2);
insert into tipo(nombre, categoria_id)
values('Controles y calibradores', 2);
insert into tipo(nombre, categoria_id)
values('Reactivos Hematológicos', 2);
insert into tipo(nombre, categoria_id)
values('Analizadores', 3);
insert into tipo(nombre, categoria_id)
values('Reactivos', 3);
insert into tipo(nombre, categoria_id)
values('Analizadores', 7);
insert into tipo(nombre, categoria_id)
values('Pruebas Rápidas', 7);
insert into tipo(nombre, categoria_id)
values('Reactivos de Eliza', 7);


select * from producto;