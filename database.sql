CREATE DATABASE IF NOT EXISTS negosville;
USE negosville;

CREATE TABLE IF NOT EXISTS users(
id              int(255) auto_increment not null,
role            varchar(20),
name            varchar(100),
surname         varchar(200),
birthdate       date,
nick            varchar(255),
email           varchar(255),
password        varchar(255),
image           varchar(255),
created_at      datetime,
updated_at      datetime,
remember_token  varchar(255),
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO users VALUES(null, 'user', 'Ariel', 'Blas', '1990-08-13','arielblas' , 'ariel@blas.com', 'pass', null, CURTIME(), CURTIME(), null);
INSERT INTO users VALUES(null, 'user', 'Juan', 'Lopez', '1990-09-13','juanlopez' , 'juan@juan.com', 'pass', null, CURTIME(), CURTIME(), null);
INSERT INTO users VALUES(null, 'user', 'Manolo', 'Garcia', '1990-10-13','manologarcia' , 'manolo@manolo.com', 'pass', null, CURTIME(), CURTIME(), null);

CREATE TABLE IF NOT EXISTS center_images(
id              int(255) auto_increment not null,
user_id         int(255),
title           varchar(100),
category        varchar(100),
description     text,
image_path      varchar(255),
created_at      datetime,
updated_at      datetime,
CONSTRAINT pk_center_images PRIMARY KEY (id),
CONSTRAINT fk_center_images_users FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;

INSERT INTO center_images VALUES(null, 1, 'Tiend Ariel', 'tienda', 'descripcion de prueba 1', 'test.jpg', CURTIME(), CURTIME());
INSERT INTO center_images VALUES(null, 2, 'Tiend Juan', 'tienda', 'descripcion de prueba 2', 'playa.jpg', CURTIME(), CURTIME());
INSERT INTO center_images VALUES(null, 3, 'Tiend Manolo', 'tienda', 'descripcion de prueba 3', 'arena.jpg', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS comments(
id              int(255) auto_increment not null,
user_id         int(255),
center_image_id int(255),
content         text,
created_at      datetime,
updated_at      datetime,
CONSTRAINT pk_comments PRIMARY KEY(id),
CONSTRAINT fk_comments_users FOREIGN KEY(user_id) REFERENCES users(id),
CONSTRAINT fk_comments_center_images FOREIGN KEY(center_image_id) REFERENCES center_images(id)
)ENGINE=InnoDb;

INSERT INTO comments VALUES(null, 1, 2, 'Bonita tienda Juan', CURTIME(), CURTIME());
INSERT INTO comments VALUES(null, 2, 1, 'Bonita tienda Ariel', CURTIME(), CURTIME());
INSERT INTO comments VALUES(null, 3, 3, 'Espero que les guste!', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS likes(
id              int(255) auto_increment not null,
user_id         int(255),
center_image_id int(255),
created_at      datetime,
updated_at      datetime,
CONSTRAINT pk_likes PRIMARY KEY(id),
CONSTRAINT fk_likes_users FOREIGN KEY(user_id) REFERENCES users(id),
CONSTRAINT fk_likes_center_images FOREIGN KEY(center_image_id) REFERENCES center_images(id)
)ENGINE=InnoDb;

INSERT INTO likes VALUES(null, 1, 3, CURTIME(), CURTIME());
INSERT INTO likes VALUES(null, 2, 1, CURTIME(), CURTIME());
INSERT INTO likes VALUES(null, 3, 2, CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS profiles(
id              int(255) auto_increment not null,
user_id         int(255),
description     text,
link            varchar(255),
phone_number    varchar(255),
residence       varchar(255),
created_at      datetime,
updated_at      datetime,
CONSTRAINT pk_profiles PRIMARY KEY(id),
CONSTRAINT fk_profiles_users FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;

INSERT INTO profiles VALUES(null, 1, 'Hola soy Ariel y esta es mi cuenta', 'http://ariel.com', '54 11-5019-9099', 'Argentina', CURTIME(), CURTIME());
INSERT INTO profiles VALUES(null, 2, 'Hola soy Juan y esta es mi cuenta', 'http://juan.com', '54 11-5019-9123', 'Argentina', CURTIME(), CURTIME());
INSERT INTO profiles VALUES(null, 3, 'Hola soy Manolo y esta es mi cuenta', 'http://manolo.com', '54 11-5019-1839', 'Argentina', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS follows(
id          int(255) auto_increment not null,
user_id     int(255),
profile_id  int(255),
created_at  datetime,
updated_at  datetime,
CONSTRAINT pk_follows PRIMARY KEY(id),
CONSTRAINT fk_follows_users FOREIGN KEY(user_id) REFERENCES users(id),
CONSTRAINT fk_follows_profiles FOREIGN KEY(profile_id) REFERENCES profiles(id)
)ENGINE=InnoDb;

INSERT INTO follows VALUES(null, 1, 2, CURTIME(), CURTIME());
INSERT INTO follows VALUES(null, 2, 1, CURTIME(), CURTIME());
INSERT INTO follows VALUES(null, 3, 1, CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS locations(
id              int(255) auto_increment not null,
center_image_id int(255),
provincia       varchar(255),
ciudad          varchar(255),
direccion       varchar(255),
created_at      datetime,
updated_at      datetime,
CONSTRAINT pk_locations PRIMARY KEY(id),
CONSTRAINT fk_locations_center_images FOREIGN KEY(center_image_id) REFERENCES center_images(id)
)ENGINE=InnoDb;

INSERT INTO locations VALUES(null, 1, 'Buenos Aires', 'Capital Federal', 'Lavelle 4034', CURTIME(), CURTIME());
INSERT INTO locations VALUES(null, 2, 'Buenos Aires', 'Capital Federal', 'Lavelle 2034', CURTIME(), CURTIME());
INSERT INTO locations VALUES(null, 3, 'Buenos Aires', 'Capital Federal', 'Lavelle 1034', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS images(
id              int(255) auto_increment not null,
center_image_id int(255),
image_path      varchar(255),
created_at      datetime,
updated_at      datetime,
CONSTRAINT pk_image_ PRIMARY KEY(id),
CONSTRAINT fk_images_center_images FOREIGN KEY(center_image_id) REFERENCES center_images
)ENGINE=InnoDb;

INSERT INTO images VALUES(null, 1, 'test2.jpg', CURTIME(), CURTIME());
INSERT INTO images VALUES(null, 2, 'playa2.jpg', CURTIME(), CURTIME());
INSERT INTO images VALUES(null, 2, 'arena2.jpg', CURTIME(), CURTIME());