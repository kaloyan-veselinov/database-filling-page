use scotchbox;

DROP TABLE  IF EXISTS  keyEvents;
DROP TABLE  IF EXISTS  entries;
DROP TABLE  IF EXISTS  passwords;

DROP USER 'user'@'localhost';

CREATE  USER 'user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON scotchbox.* TO 'user'@'localhost' IDENTIFIED BY 'password';



CREATE TABLE IF NOT EXISTS passwords
(
    password VARCHAR(24),
    PRIMARY KEY (password)
);

CREATE TABLE IF NOT EXISTS entries
(
    entryId INT AUTO_INCREMENT,
    password VARCHAR(24),
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

INSERT INTO passwords (password) VALUES ('password1');
INSERT INTO passwords (password) VALUES ('password2');
INSERT INTO passwords (password) VALUES ('password3');


    

    
    
