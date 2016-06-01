-- Base de datos: Proyecto Quality Mega Pixel (QMP)
-- comando para conexion: psql -h ec2-54-243-249-65.compute-1.amazonaws.com -U huzbmpygeprpvh -p 5432  -d db2nfep0451nvu -W
DROP TABLE IF EXISTS usuarios CASCADE;
CREATE TABLE usuarios(

	ID SERIAL,
	nombres  CHARACTER VARYING(30) NOT NULL,
	apellidos  CHARACTER VARYING(30) NOT NULL,
	nickname CHARACTER VARYING(30) UNIQUE NOT NULL,
   	correo_electronico  CHARACTER VARYING(100) UNIQUE NOT NULL,
	password  CHARACTER VARYING(30) NOT NULL,
	rol INT NOT NULL DEFAULT 0,
	estado BOOLEAN DEFAULT TRUE

);
DROP TABLE IF EXISTS registro_gustos CASCADE; 
CREATE TABLE registro_gustos(

	ID SERIAL,
	id_usuario INT NOT NULL,
	generoID INT NOT NULL

);
DROP TABLE IF EXISTS valoracion_peliculas CASCADE; 
CREATE TABLE valoracion_peliculas(

	ID SERIAL,
	id_pelicula BIGINT NOT NULL,
	id_usuario INT NOT NULL,
	valoracion DOUBLE PRECISION NOT NULL,
	fecha_valoracion TIMESTAMP NOT NULL
);
DROP TABLE IF EXISTS coleccion CASCADE; 
CREATE TABLE coleccion(

	ID SERIAL,
	id_usuario INT NOT NULL,
	nombre CHARACTER VARYING(100) NOT NULL,
	tipo INT NOT NULL,
	fecha_creacion TIMESTAMP NOT NULL

);




DROP TABLE IF EXISTS peliculas_coleccion;
CREATE TABLE peliculas_coleccion(
	ID SERIAL,
	id_coleccion INT NOT NULL,
	id_pelicula INT NOT NULL,
	fecha_adicion TIMESTAMP NOT NULL
);



-- Llaves primarias
ALTER TABLE usuarios ADD  PRIMARY KEY (ID);
ALTER TABLE registro_gustos ADD  PRIMARY KEY (ID);
ALTER TABLE valoracion_peliculas ADD PRIMARY KEY (ID);
ALTER TABLE coleccion ADD PRIMARY KEY (ID);
ALTER TABLE peliculas_coleccion ADD PRIMARY KEY (ID);


-- Llaves foraneas
ALTER TABLE registro_gustos ADD CONSTRAINT 
registro_gustos_fk FOREIGN KEY (id_usuario)
REFERENCES usuarios (ID);

ALTER TABLE valoracion_peliculas ADD CONSTRAINT
registro_calificacion_fk FOREIGN KEY (id_usuario)
REFERENCES usuarios(ID);

ALTER TABLE peliculas_coleccion ADD CONSTRAINT 
peliculas_coleccion_fk FOREIGN KEY (id_coleccion)
REFERENCES coleccion (ID);

ALTER TABLE coleccion ADD CONSTRAINT 
coleccion_personalizada_fk FOREIGN KEY (id_usuario)
REFERENCES usuarios (ID);

ALTER TABLE valoracion_peliculas
ADD CONSTRAINT valoracion_peliculas_unique UNIQUE (id_pelicula,id_usuario);