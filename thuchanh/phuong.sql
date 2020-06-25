CREATE TABLE user(
id int AUTO_INCREMENT PRIMARY KEY not null,
fullname varchar (50) not null,
email varchar (50) not null,
username varchar (50) not null unique ,
password varchar (255) not null
);

SELECT * FROM user;
