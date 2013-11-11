use team04;
drop table if exists statuses;

create table statuses (
	statusID int not null primary key,
	userID int not null,
	age int,
	gender char(2),
	illness int,
	sleep char(10),
	feeling int
)