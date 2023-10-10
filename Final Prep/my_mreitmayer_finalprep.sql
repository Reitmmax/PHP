CREATE DATABASE my_mreitmayer_final;

USE my_mreitmayer_final;

CREATE TABLE games (
    gameID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gameName varchar(255) NOT NULL 
);

CREATE TABLE achievements (
    achievementID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    achievementName varchar(255) NOT NULL,
    gameName varchar(255) NOT NULL
);

CREATE TABLE playtime (
    playtimeID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    playtimeTime varchar(255) NOT NULL,
    gameName varchar(255) NOT NULL,
    achievementName varchar(255) NOT NULL
);

CREATE INDEX games 
ON  games (gameName);

GRANT SELECT, INSERT, UPDATE, DELETE 
ON my_mreitmayer_games.* 
TO 'game_user@localhost' 
IDENTIFIED BY 'sesame';

INSERT INTO games ( gameID, gameName)
VALUES ( NULL, 'Fallout 4');

INSERT INTO achievements ( achievementID, achievementName, gameName)
VALUES ( NULL, 'First Settlers', 'Fallout 4');

INSERT INTO playtime ( playtimeID, playtimeTime, achievementName, gameName)
VALUES ( NULL,'0:30', 'First Settlers', 'Fallout 4');



