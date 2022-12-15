CREATE DATABASE blog;
SET NAMES UTF8;
CREATE DATABASE IF NOT EXISTS blog;
USE blog;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios(
  id            int(255) auto_increment not null,
  nombre        varchar(100) not null,
  usuario       varchar(100) not null,
  email         varchar(255) not null,
  password      varchar(255) not null,
  rol           int(50) not null,
  fecha         date ,
  CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
INSERT INTO `usuarios`(`id`, `nombre`, `usuario`, `email`, `password`, `rol`, `fecha`) VALUES ('1','admin','admin','admin@gmail.com','admin1','1','2022/12/15')
INSERT INTO `usuarios`(`id`, `nombre`, `usuario`, `email`, `password`, `rol`, `fecha`) VALUES ('2','pedro','pedro02','pedrito@gmail.com','1234','0','2022/12/15')

DROP TABLE IF EXISTS categorias;
CREATE TABLE categorias(
  id            int(255) auto_increment not null,
  nombre        varchar(100),
  CONSTRAINT pk_categorias PRIMARY KEY(id)
);

INSERT INTO categorias VALUES(1,"Accion");
INSERT INTO categorias VALUES(2,"Deportes");

DROP TABLE IF EXISTS entradas;
CREATE TABLE entradas(
  id            int(255) auto_increment not null,
  usuario_id    int(255) not null,
  categoria_id  int(255) not null,
  titulo        varchar(255) not null,
  descripcion   varchar(255),
  fecha         date,
  CONSTRAINT pk_entradas PRIMARY KEY(id),
  CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
  CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
);

INSERT INTO `entradas`(`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) VALUES ('1','1','1','titulo de la entrada','Lorem Ipsum is simply dummy text of the printing and typesetting industry','2022/12/15')
INSERT INTO `entradas`(`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) VALUES ('2','2','2','titulo de la entrada','Lorem Ipsum is simply dummy text of the printing and typesetting industry','2022/12/15')


