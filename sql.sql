CREATE DATABASE ChatApp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE ChatApp;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

CREATE TABLE users (
	user_id int(11) PRIMARY KEY  AUTO_INCREMENT,
    id_confirm int,
	fname varchar(255) NOT NULL,
	lname varchar(255) NOT NULL,
	email varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	img varchar(255) NOT NULL,
	`status` varchar(255) NOT NULL
);


select * from users where user_id = 1;
SELECT * FROM users WHERE NOT user_id = 1 ORDER BY user_id DESC
insert into users(fname, lname, email, `password`, img, `status`) 
	values("le","nhut duy","nhutduy30520@gmail.com","8120","icon.png","");
insert into users(fname, lname, email, `password`, img, `status`) 
	values("Nguyen","Quoc Nil","nil123@gmail.com","12345","icon.png","");
insert into users(fname, lname, email, `password`, img, `status`) 
	values("Sang","Bùi","sangvui@gmail.com","8120","icon.png","Offline");


CREATE TABLE messages (
	msg_id int(11) PRIMARY KEY AUTO_INCREMENT,
	incoming_msg_id int(255) NOT NULL,
	outgoing_msg_id int(255) NOT NULL,
	msg varchar(1000) NOT NULL
);

insert into messages(incoming_msg_id, outgoing_msg_id, msg) 
	values(1,3,"hello");
insert into messages(incoming_msg_id, outgoing_msg_id, msg) 
	values(1,3,"how are you???");
insert into messages(incoming_msg_id, outgoing_msg_id, msg) 
	values(3,1,"im fine, thank you and you!!!");


select * from messages;

SELECT * FROM messages WHERE (incoming_msg_id = 4
			OR outgoing_msg_id = 4) AND (outgoing_msg_id = 1
                OR incoming_msg_id = 1) ORDER BY msg_id DESC LIMIT 1;

COMMIT;
