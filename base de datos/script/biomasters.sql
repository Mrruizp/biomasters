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

create table producto
(
producto_id int primary key auto_increment,
nombre varchar(200) not null,
descripcion varchar(500) not null,
estado char(1) not null,
usuario_id int,
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

select producto_id, nombre, descripcion, estado from producto where producto_id = 1

update
                    producto
                set
                    nombre = 'aaaaaaaaaaaaa',
                    descripcion = 'hola',
                    estado = '2'
              
                where
                    producto_id = 8
                    
insert into producto(nombre, descripcion, estado)
value('aaaa','bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '0');

select * from cargo;

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

select* from menu_item_accesos;
select* from menu_item;
select* from menu;

delete from menu_item_accesos where codigo_menu_item_acceso = 3;
delete from menu_item where codigo_menu_item = 3;



update  menu_item set nombre = 'Promoción' where codigo_menu_item = 3;
insert into menu_item
value(1, 1, 'Inicio', 'menu.principal.view.php');
insert into menu_item
value(2, 1, 'Producto', 'gestionar.producto.view.php');
insert into menu_item
value(2, 2, 'Oferta', 'gestionar.promocion.view.php');

update menu_item
set  nombre = 'Producto'
where
	codigo_menu_item = 1 and codigo_menu = 2

insert into menu_item_accesos
value(1, '1', 1, 1);
insert into menu_item_accesos
value(2, '1', 1, 1);

insert into menu_item_accesos
value(2, '2',1, 1);

select * from oferta


select* from menu;
select* from menu_item;

select* from menu_item_accesos;



insert into credenciales_acceso
value(1,(select md5('123')), 'A', 'A',1);

select

                            u.nombres,
                            u.apellidos,
                            r.clave,
                            r.tipo,
                            r.estado,
                            r.codigo_usuario,
                            c.descripcion as cargo,
                            c.cargo_id,
                            p.producto_id,
                            p.nombre,
                            p.descripcion
                    from
                        cargo c inner join usuario u
                    on
                        (c.cargo_id = u.cargo_id) inner join credenciales_acceso r
                    on
                        (u.usuario_id = r.usuario_id) right join producto p 
					on	
						( u.usuario_id = p.usuario_id)
                    where
                            u.email = 'renzorp_14@hotmail.com';