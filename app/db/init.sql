DROP DATABASE IF EXISTS devnotes;
CREATE DATABASE devnotes;
USE devnotes;

CREATE TABLE notes(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title varchar(30) NOT NULL,
	body varchar(255) NOT NULL,
	lang varchar(20) NOT NULL
);