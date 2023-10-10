CREATE DATABASE my_mreitmayer_music;

USE my_mreitmayer_music;

CREATE TABLE artists (
    artistID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    artistName varchar(255) NOT NULL 
);

CREATE TABLE albums (
    albumID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    albumName varchar(255) NOT NULL,
    albumDate varchar(255) NOT NULL,
    artistName varchar(255) NOT NULL
);

CREATE TABLE tracks (
    trackID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    trackName varchar(255) NOT NULL,
    trackLength varchar(255) NOT NULL,
    albumName varchar(255) NOT NULL,
    artistName varchar(255) NOT NULL
);

CREATE INDEX songs 
ON  tracks (trackName);

GRANT SELECT, INSERT, UPDATE, DELETE 
ON my_mreitmayer_music.* 
TO 'music_user@localhost' 
IDENTIFIED BY 'sesame';


INSERT INTO artists ( artistID, artistName)
VALUES ( NULL, 'Green Day');

INSERT INTO artists ( artistID, artistName)
VALUES ( NULL, 'The Beatles');

INSERT INTO albums ( albumID, albumDate, albumName, artistName)
VALUES ( NULL, 'September 21, 2004', 'American Idiot', 'Green Day');

INSERT INTO albums ( albumID, albumDate, albumName, artistName)
VALUES ( NULL, 'September 26, 1969', 'Abbey Road', 'The Beatles');

INSERT INTO tracks ( trackID, trackName, trackLength, artistName, albumName)
VALUES ( NULL, 'American Idiot', '2:54', 'Green Day', 'American Idiot');

INSERT INTO tracks ( trackID, trackName, trackLength, artistName, albumName)
VALUES ( NULL, 'Wake Me up When September Ends', '4:46', 'Green Day', 'American Idiot');

INSERT INTO tracks ( trackID, trackName, trackLength, artistName, albumName)
VALUES ( NULL, 'Holiday', '3:52', 'Green Day', 'American Idiot');

INSERT INTO tracks ( trackID, trackName, trackLength, artistName, albumName)
VALUES ( NULL, 'Boulevard of Broken Dreams', '4:20', 'Green Day', 'American Idiot');

INSERT INTO tracks ( trackID, trackName, trackLength, artistName, albumName)
VALUES ( NULL, 'Octopus Garden', '2:51', 'The Beatles', 'Abbey Road');

INSERT INTO tracks ( trackID, trackName, trackLength, artistName, albumName)
VALUES ( NULL, 'Sun King', '2:26', 'The Beatles', 'Abbey Road');

INSERT INTO tracks ( trackID, trackName, trackLength, artistName, albumName)
VALUES ( NULL, 'Oh! Darling', '3:27', 'The Beatles', 'Abbey Road');

INSERT INTO tracks ( trackID, trackName, trackLength, artistName, albumName)
VALUES ( NULL, 'Something', '3:03', 'The Beatles', 'Abbey Road');