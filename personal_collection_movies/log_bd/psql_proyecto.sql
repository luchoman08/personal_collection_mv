DROP TABLE IF EXIST usuarios on cascade;
create table usuarios(id integer primary key AI,
num_identificacion varchar(50) unique,
nombres varchar(50) not null,
correo_electronico varchar(50));