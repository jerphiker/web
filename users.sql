use team04;
drop table if exists users;

create table users (
	userID int not null primary key,
	name varchar(50),
	userName varchar(50),
	email varchar(50),
	password varchar(128),
	confirmcode varchar(128)
)
