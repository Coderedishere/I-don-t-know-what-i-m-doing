DROP DATABASE IF EXISTS my_HLindner_final;
CREATE DATABASE my_HLindner_final;
USE my_HLindner_final;

CREATE TABLE Artists (
    artistNames VARCHAR(45)  NOT NULL  UNIQUE,
    PRIMARY KEY (artistNames)
);

CREATE TABLE Albums (
    albumNames  VARCHAR(45)  NOT NULL UNIQUE,
    albumReleaseDate  DATE  NOT NULL,
    genre VARCHAR(45) NOT NULL,
    artistNames VARCHAR(45)  NOT NULL  UNIQUE,
    PRIMARY KEY (albumNames),
    FOREIGN KEY (artistNames) REFERENCES Artists(artistNames)
);

CREATE TABLE Tracks (
    trackNumbers  INT  NOT NULL AUTO_INCREMENT,
    trackNames  VARCHAR(45)  NOT NULL,
    trackLength  TIME  NOT NULL,
    albumNames  VARCHAR(45)  NOT NULL,
    PRIMARY KEY (trackNumbers),
    FOREIGN KEY (albumNames) REFERENCES Albums(albumNames)
    
);

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX namesIndex
ON Tracks (trackNames);


INSERT INTO Artists (artistNames) VALUES ('Rick Astley');
INSERT INTO Artists (artistNames) VALUES ('BTS');
INSERT INTO Albums (albumNames, albumReleaseDate, genre, artistNames) VALUES ('Whenever You Need Somebody', '1987-11-12', 'Dance-Pop', 'Rick Astley');
INSERT INTO Albums (albumNames, albumReleaseDate, genre, artistNames) VALUES ('Love Yourself: Answer', '2018-08-24','Pop', 'BTS');
INSERT INTO Tracks (trackNumbers, trackNames, trackLength, albumNames) VALUES (1, 'Never Gonna Give You Up', '00:03:33', 'Whenever You Need Somebody');
INSERT INTO Tracks (trackNumbers, trackNames, trackLength, albumNames) VALUES (1, 'Euphoria', '00:03:48', 'Love Yourself: Answer');

CREATE USER IF NOT EXISTS 'final_user'@'localhost';
 
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO 'final_user@localhost' IDENTIFIED BY 'sesame';
