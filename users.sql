use team04;
drop table if exists users;

create table users (
	userID int not null primary key,
	userName varchar(50),
	email varchar(50),
	password varchar(20),
	age int,
	gender char(2)
)