--Daniel Rico Rodriguez

--tablas


CREATE TABLE usuarios (              
id NUMBER(5) NOT NULL,   
nick varchar2(25),            
nombre varchar2(25),
apellidos varchar2(25),
email varchar2(25),
password varchar2(25),
imagen date);

ALTER TABLE usuarios ADD CONSTRAINT usuarios_pk PRIMARY KEY ( id );



CREATE TABLE entradas (              
id NUMBER(5) NOT NULL,   
usuario_id NUMBER(2) NOT NULL, 
categoria_id NUMBER(2) NOT NULL,               
titulo varchar2(25),
imagen date,
descripcion varchar2(100),
fecha date);

ALTER TABLE entradas ADD CONSTRAINT entradas_pk PRIMARY KEY ( id,  usuario_id, categoria_id);


CREATE TABLE categorias (              
id NUMBER(5) NOT NULL,               
nombre varchar2(25));

ALTER TABLE categorias ADD CONSTRAINT categorias PRIMARY KEY ( id );

--usuarios
