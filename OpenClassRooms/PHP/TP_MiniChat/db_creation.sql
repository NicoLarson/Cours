drop table if exists 'test'.'minichat'


create table chat
(
    id int not null auto_increment primary key,
    pseudo varchar(255) not null,
    message varchar(255) not null
);
