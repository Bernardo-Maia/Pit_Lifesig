-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema lifesig
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema lifesig
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lifesig` DEFAULT CHARACTER SET latin1 ;
USE `lifesig` ;

-- -----------------------------------------------------
-- Table `lifesig`.`farmacia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lifesig`.`farmacia` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `senha` VARCHAR(40) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `cep` INT(9) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `lifesig`.`remedios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lifesig`.`remedios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `tipo` VARCHAR(60) NOT NULL,
  `generico` CHAR(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `lifesig`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lifesig`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `senha` VARCHAR(40) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `cep` INT(9) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `lifesig`.`farmacia_has_remedios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lifesig`.`farmacia_has_remedios` (
  `farmacia_id` INT(11) NOT NULL,
  `remedios_id` INT(11) NOT NULL,
  PRIMARY KEY (`farmacia_id`, `remedios_id`),
  INDEX `fk_farmacia_has_remedios_remedios1_idx` (`remedios_id` ASC),
  INDEX `fk_farmacia_has_remedios_farmacia_idx` (`farmacia_id` ASC) ,
  CONSTRAINT `fk_farmacia_has_remedios_farmacia`
    FOREIGN KEY (`farmacia_id`)
    REFERENCES `lifesig`.`farmacia` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_farmacia_has_remedios_remedios1`
    FOREIGN KEY (`remedios_id`)
    REFERENCES `lifesig`.`remedios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `lifesig`.`usuario_has_remedios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lifesig`.`usuario_has_remedios` (
  `usuario_id` INT(11) NOT NULL,
  `remedios_id` INT(11) NOT NULL,
  PRIMARY KEY (`usuario_id`, `remedios_id`),
  INDEX `fk_usuario_has_remedios_remedios1_idx` (`remedios_id` ASC),
  INDEX `fk_usuario_has_remedios_usuario1_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_usuario_has_remedios_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `lifesig`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_remedios_remedios1`
    FOREIGN KEY (`remedios_id`)
    REFERENCES `lifesig`.`remedios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


-- https://www.youtube.com/watch?v=hWka8OguXCo