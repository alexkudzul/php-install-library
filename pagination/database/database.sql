CREATE DATABASE php_mvc_intro;
use php_mvc_intro;

CREATE TABLE users(
id          int(255) auto_increment not null,
name        varchar(100) not null,
lastname    varchar(100) not null,
email       varchar(255) not null,
password    varchar(255) not null,
date        date not null,
CONSTRAINT pk_users PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE notes(
id              int(255) auto_increment not null,
user_id         int(255) not null,
title           varchar(255) not null,
description     MEDIUMTEXT,
date            date not null,
CONSTRAINT pk_notes PRIMARY KEY(id),
CONSTRAINT fk_note_user FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;