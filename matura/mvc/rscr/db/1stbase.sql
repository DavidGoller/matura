-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema happy_dogs
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema happy_dogs
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `happy_dogs` DEFAULT CHARACTER SET utf8 ;
USE `happy_dogs` ;

-- -----------------------------------------------------
-- Table `happy_dogs`.`language`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `happy_dogs`.`language` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `short` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `happy_dogs`.`texts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `happy_dogs`.`texts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `actionid` INT NOT NULL,
  `text` LONGTEXT NULL,
  `lid` INT NOT NULL,
  PRIMARY KEY (`id`, `actionid`),
    FOREIGN KEY (`lid`)
    REFERENCES `happy_dogs`.`language` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `happy_dogs`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `happy_dogs`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usercol` VARCHAR(45) NULL,
  `firstname` VARCHAR(45) NULL,
  `lastname` VARCHAR(45) NULL,
  `phone` INT NULL,
  `email` VARCHAR(255) NULL,
  `password` VARCHAR(45) NULL,
  `codicefiscale` VARCHAR(255) NULL,
  `lid` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_user_language1`
    FOREIGN KEY (`lid`)
    REFERENCES `happy_dogs`.`language` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `happy_dogs`.`Address`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `happy_dogs`.`Address` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `address` VARCHAR(255) NULL,
  `country` VARCHAR(255) NULL,
  `postcard` INT NULL,
  `city` VARCHAR(255) NULL,
  `privince` VARCHAR(255) NULL,
  `uid` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Address_user1`
    FOREIGN KEY (`uid`)
    REFERENCES `happy_dogs`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `happy_dogs`.`opes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `happy_dogs`.`opes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cardnumber` INT NULL,
  `opescol` VARCHAR(45) NULL,
  `uid` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_opes_user1`
    FOREIGN KEY (`uid`)
    REFERENCES `happy_dogs`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `happy_dogs`.`family`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `happy_dogs`.`family` (
  `fid` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(45) NULL,
  `lastname` VARCHAR(45) NULL,
  `phone` INT NULL,
  `uid` INT NOT NULL,
  PRIMARY KEY (`fid`),
  CONSTRAINT `fk_family_user1`
    FOREIGN KEY (`uid`)
    REFERENCES `happy_dogs`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
