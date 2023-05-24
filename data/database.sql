-- drop database solid;

create database solid
DEFAULT CHARACTER SET = utf8
DEFAULT COLLATE = utf8_unicode_ci;

use solid;

create table people (
    pk_people int not null auto_increment primary key,
    user_name varchar(255) not null,
    email varchar(255) not null unique key,
    age int,
    sex enum('M','F'),
    password varchar(12) not null
)CHARACTER SET utf8 COLLATE utf8_unicode_ci;

create table employees(
    pk_employee int not null auto_increment primary key,
    fk_people int not null, 
    office varchar(255) not null,
    wage float not null,
    foreign key (fk_people) references people(pk_people)
)CHARACTER SET utf8 COLLATE utf8_unicode_ci;

create table clients(
    pk_client int not null auto_increment primary KEY,
    fk_people int not null, 
    services varchar(255) not null,
    value_cost float not null,
    foreign key (fk_people) references people(pk_people)
)CHARACTER SET utf8 COLLATE utf8_unicode_ci;