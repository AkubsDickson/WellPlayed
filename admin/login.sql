drop database if exists login;

create database login;
use login;

-- Structure for Users table
create table users(
    id varchar(10) not null,
    username varchar(50) not null unique,
    email varchar(100) not null,
    password varchar(255) not null
);

