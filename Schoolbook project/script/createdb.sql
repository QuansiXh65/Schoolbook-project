DROP DATABASE IF EXISTS Sociaal;

CREATE DATABASE Sociaal;

USE Sociaal;



DROP TABLE IF EXISTS Post;

CREATE TABLE Post (

                         id INT NOT NULL AUTO_INCREMENT,

                         auteur VARCHAR(50),

                         titel VARCHAR(50),

                         bericht VARCHAR(50),

                         afbeelding VARCHAR(225),

                         likes INT default 0,

                         PRIMARY KEY (id)

);

ALTER TABLE post ADD created_at DATETIME DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE post ADD comments VARCHAR(50);

CREATE DATABASE postcomments;
USE postcomments;

CREATE TABLE comments(
                        id INT NOT NULL AUTO_INCREMENT,
                        post_id INT,
                        comment VARCHAR(50)
);