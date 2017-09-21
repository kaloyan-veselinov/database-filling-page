use scotchbox;

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

CREATE TABLE IF NOT EXISTS keyDownEvents
(
	keyId INT,
	entryId INT,
    keyValue VARCHAR(10),
    location INT,
    ctrlKey BOOLEAN,
    altKey BOOLEAN,
    shiftKey BOOLEAN,
    time TIMESTAMP,
    PRIMARY KEY (keyId),
    FOREIGN KEY (entryId) REFERENCES entries (entryId)
);

CREATE TABLE IF NOT EXISTS keyUpEvents
(
	keyId INT,
	entryId INT,
    keyValue VARCHAR(10),
    location INT,
    ctrlKey BOOLEAN,
    altKey BOOLEAN,
    shiftKey BOOLEAN,
    time TIMESTAMP,
    PRIMARY KEY (keyId),
    FOREIGN KEY (entryId) REFERENCES entries (entryId)
);


    
    
    
    