CREATE SCHEMA IF NOT EXISTS KSDBPM_TEST_DATA DEFAULT CHARACTER SET utf8 ;
USE KSDBPM_TEST_DATA ;

-- -----------------------------------------------------
-- Table `KSDBPM_TEST_DATA`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS KSDBPM_TEST_DATA.`User` (
  `username` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`username`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KSDBPM_TEST_DATA`.`Entry`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS KSDBPM_TEST_DATA.`Entry` (
  `index` INT NOT NULL,
  `local` VARCHAR(45) NULL,
  `date` DATETIME NULL,
  `password` VARCHAR(100) NULL,
  `submitMethod` VARCHAR(45) NULL,
  `browser` VARCHAR(45) NULL,
  `User_username` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`index`),
  INDEX `fk_Entry_User_idx` (`User_username` ASC),
  CONSTRAINT `fk_Entry_User`
    FOREIGN KEY (`User_username`)
    REFERENCES KSDBPM_TEST_DATA.`User` (`username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KSDBPM_TEST_DATA`.`Key`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS KSDBPM_TEST_DATA.`Key` (
  `timeUp` INT NULL,
  `timeDown` INT NULL,
  `modifierSequence` INT NULL,
  `shiftUp` INT NULL,
  `shiftDown` INT NULL,
  `shiftLocation` TINYINT(2) NULL,
  `ctrlUp` INT NULL,
  `ctrlDown` INT NULL,
  `ctrlLocation` TINYINT(2) NULL,
  `altUp` INT NULL,
  `altDown` INT NULL,
  `altLocation` TINYINT(2) NULL,
  `capslockUp` INT NULL,
  `capslockDown` INT NULL,
  `order` INT NULL,
  `Entry_index` INT NOT NULL,
  INDEX `fk_Key_Entry1_idx` (`Entry_index` ASC),
  CONSTRAINT `fk_Key_Entry1`
    FOREIGN KEY (`Entry_index`)
    REFERENCES KSDBPM_TEST_DATA.`Entry` (`index`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;