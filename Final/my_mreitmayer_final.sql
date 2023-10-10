
 CREATE DATABASE my_mreitmayer_final;

USE my_mreitmayer_final;

CREATE TABLE games (
    gameID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gameName varchar(255) NOT NULL 
);

CREATE TABLE achievements (
    achievementID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    achievementName varchar(255) NOT NULL,
    gameID varchar(255) NOT NULL
);

CREATE TABLE playtime (
    playtimeID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    playtimeTime varchar(255) NOT NULL,
    gameID varchar(255) NOT NULL,
    achievementID varchar(255) NOT NULL
);

CREATE INDEX games 
ON  games (gameName);

GRANT SELECT, INSERT, UPDATE, DELETE 
ON my_mreitmayer_final.* 
TO 'game_user@localhost' 
IDENTIFIED BY 'sesame';

INSERT INTO games ( gameID, gameName)
VALUES ( NULL, 'Fallout 4');
INSERT INTO games ( gameID, gameName)
VALUES ( NULL, 'Binding of Isaac');
INSERT INTO games ( gameID, gameName)
VALUES ( NULL, 'Guitar Hero');
INSERT INTO games ( gameID, gameName)
VALUES ( NULL, 'Civilatization VI');

INSERT INTO achievements ( achievementID, achievementName, gameID)
VALUES ( NULL, 'First Settlers', 1);
INSERT INTO achievements ( achievementID, achievementName, gameID)
VALUES ( NULL, 'March of Freedom', 1);

INSERT INTO achievements ( achievementID, achievementName, gameID)
VALUES ( NULL, 'Judas Shadow', 2);
INSERT INTO achievements ( achievementID, achievementName, gameID)
VALUES ( NULL, 'Polythesis', 2);

INSERT INTO achievements ( achievementID, achievementName, gameID)
VALUES ( NULL, 'Beat Axl Rose', 3);
INSERT INTO achievements ( achievementID, achievementName, gameID)
VALUES ( NULL, 'First Song', 3);

INSERT INTO achievements ( achievementID, achievementName, gameID)
VALUES ( NULL, 'Win Nuclear War as Gandi', 4);
INSERT INTO achievements ( achievementID, achievementName, gameID)
VALUES ( NULL, 'Win in Settler Difficulity', 4);

INSERT INTO playtime ( playtimeID, playtimeTime,  achievementID, gameID)
VALUES ( NULL,'0:30',  1, 1);

INSERT INTO playtime ( playtimeID, playtimeTime, achievementID, gameID)
VALUES ( NULL,'1:30',  2, 1);

INSERT INTO playtime ( playtimeID, playtimeTime,  achievementID, gameID)
VALUES ( NULL,'2:30',  3, 2);

INSERT INTO playtime ( playtimeID, playtimeTime, achievementID, gameID)
VALUES ( NULL,'0:10',  4, 2);

INSERT INTO playtime ( playtimeID, playtimeTime, achievementID, gameID)
VALUES ( NULL,'0:20',  5, 3);

INSERT INTO playtime ( playtimeID, playtimeTime,  achievementID, gameID)
VALUES ( NULL,'0:10', 6, 3);

INSERT INTO playtime ( playtimeID, playtimeTime,  achievementID, gameID)
VALUES ( NULL,'0:20', 7, 4);

INSERT INTO playtime ( playtimeID, playtimeTime,  achievementID, gameID)
VALUES ( NULL,'0:30', 8, 4);





