drop table if exists blog.members;

create table members
(
    id int auto_increment not null primary key,
    username varchar(255) not null,
    password varchar(255) not null,
    email varchar(255) not null,
    register_date datetime not null
);
