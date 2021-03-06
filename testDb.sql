use scotchbox;

DROP TABLE  IF EXISTS  keyEvents;
DROP TABLE  IF EXISTS  entries;
DROP TABLE  IF EXISTS  passwords;

DROP USER 'user'@'localhost';

CREATE  USER 'user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON scotchbox.* TO 'user'@'%' IDENTIFIED BY 'password';



CREATE TABLE IF NOT EXISTS passwords
(
    password VARCHAR(100),
    PRIMARY KEY (password)
);

CREATE TABLE IF NOT EXISTS entries
(
    entryId INT AUTO_INCREMENT,
    password VARCHAR(100),
    username VARCHAR(45) NOT NULL,
    date DATE,
    locale VARCHAR(45),
    browser VARCHAR(45),
    platform VARCHAR(45),
    submitMethod VARCHAR(45),
    PRIMARY KEY (entryId),
    FOREIGN KEY (password) REFERENCES passwords(password)
);

CREATE TABLE IF NOT EXISTS keyEvents
(
    keyEventId INT AUTO_INCREMENT,
    keyId INT,
    entryId INT,
    keyValue VARCHAR(10),
    location INT,
    ctrlKey TINYINT,
    altKey TINYINT,
    shiftKey TINYINT,
    timeDown BIGINT,
    timeUp BIGINT,
    PRIMARY KEY (keyEventId),
    FOREIGN KEY (entryId) REFERENCES entries (entryId)
);

CREATE TABLE IF NOT EXISTS tokens (
    token INT,
    creationTime BIGINT,
    password VARCHAR(100),
    PRIMARY KEY (token)
);


# Bad Passwords (top 3 000)
INSERT INTO passwords (password) VALUES ('password');
INSERT INTO passwords (password) VALUES ('123456789');
INSERT INTO passwords (password) VALUES ('dragon');
INSERT INTO passwords (password) VALUES ('football');
INSERT INTO passwords (password) VALUES ('danger');
INSERT INTO passwords (password) VALUES ('unicorn');
INSERT INTO passwords (password) VALUES ('cadillac');
INSERT INTO passwords (password) VALUES ('apple1');
INSERT INTO passwords (password) VALUES ('capital');
INSERT INTO passwords (password) VALUES ('dracula');

# Okish passwords :

INSERT INTO passwords (password) VALUES ('p@s$_word');
INSERT INTO passwords (password) VALUES ('drag0n!?');
INSERT INTO passwords (password) VALUES ('fo0t#ba1l');
INSERT INTO passwords (password) VALUES ('d@nger#1989');
INSERT INTO passwords (password) VALUES ('unI=>corn');
INSERT INTO passwords (password) VALUES ('Cadi//ac');
INSERT INTO passwords (password) VALUES ('[aPple]1');
INSERT INTO passwords (password) VALUES ('Kap;tal');
INSERT INTO passwords (password) VALUES ('dr4cu!a');

# Long Passwords  :








    

    
    
