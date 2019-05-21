-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema vinos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema vinos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `vinos` DEFAULT CHARACTER SET utf8 ;
USE `vinos` ;

-- -----------------------------------------------------
-- Table `vinos`.`vino`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `vinos`.`vino` ;

CREATE TABLE IF NOT EXISTS `vinos`.`vino` (
  `idvino` INT(4) NOT NULL,
  `vinonombre` VARCHAR(45) NULL,
  `denominacion` VARCHAR(45) NULL,
  `distribuidor_iddistribuidor` INT(4) NOT NULL,
  PRIMARY KEY (`idvino`),
FOREIGN KEY (`distribuidor_iddistribuidor`)
    REFERENCES `vinos`.`distribuidor` (`iddistribuidor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vinos`.`plato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `vinos`.`plato` ;

CREATE TABLE IF NOT EXISTS `vinos`.`plato` (
  `idplato` INT(4) NOT NULL,
  `platonombre` VARCHAR(45) NULL,
  `descripcion` VARCHAR(45) NULL,
  PRIMARY KEY (`idplato`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vinos`.`vino_has_plato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `vinos`.`vino_has_plato` ;

CREATE TABLE IF NOT EXISTS `vinos`.`vino_has_plato` (
  `vino_idvino` INT(4) NOT NULL,
  `plato_idplato` INT(4) NOT NULL,
  PRIMARY KEY (`vino_idvino`, `plato_idplato`),
  FOREIGN KEY (`vino_idvino`)
    REFERENCES `vinos`.`vino` (`idvino`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
 FOREIGN KEY (`plato_idplato`)
    REFERENCES `vinos`.`plato` (`idplato`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `vinos`.`distribuidor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `vinos`.`distribuidor` ;

CREATE TABLE IF NOT EXISTS `vinos`.`distribuidor` (
  `iddistribuidor` INT(4) NOT NULL,
  `distnombre` VARCHAR(45) NULL,
  `disttelefono` VARCHAR(45) NULL,
  PRIMARY KEY (`iddistribuidor`))
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
