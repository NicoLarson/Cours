-- MEMBERS
create table members (
    id int not null,
    login varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null);

-- POSTS
create table posts (
    id int not null auto_increment primary key,
    title varchar(255) not null,
    content text not null,
    creation_date datetime not null);

-- COMMENTS
create table comments (
    id int not null auto_increment primary key,
    post_id int not null,
    author varchar(255) not null,
    comment text not null,
    comment_date datetime not null,
    foreign key (post_id) references posts(id));
