CREATE DATABASE ChatApp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE ChatApp;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

CREATE TABLE USERS (
	user_id int(11) NOT NULL,
	fname varchar(255) NOT NULL,
	lname varchar(255) NOT NULL,
	email varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	img varchar(255) NOT NULL,
	`status` varchar(255) NOT NULL
);

CREATE TABLE MESSAGES (
	msg_id int(11) NOT NULL,
	incoming_msg_id int(255) NOT NULL,
	outgoing_msg_id int(255) NOT NULL,
	msg varchar(1000) NOT NULL
);

ALTER TABLE MESSAGES
  ADD PRIMARY KEY (`msg_id`);

ALTER TABLE USERS
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE MESSAGES
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE USERS
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;