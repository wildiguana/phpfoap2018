-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema centre comercial
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema centre comercial
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `centre comercial` DEFAULT CHARACTER SET utf8 ;
USE `centre comercial` ;

-- -----------------------------------------------------
-- Table `centre comercial`.`gerent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `centre comercial`.`gerent` (
  `coditre` INT NOT NULL,
  `treballador_coditre` INT NOT NULL,
  PRIMARY KEY (`coditre`),
  INDEX `fk_gerent_treballador_idx` (`treballador_coditre` ASC) VISIBLE,
  CONSTRAINT `fk_gerent_treballador`
    FOREIGN KEY (`treballador_coditre`)
    REFERENCES `centre comercial`.`treballador` (`coditre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `centre comercial`.`cap`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `centre comercial`.`cap` (
  `idcap` INT NOT NULL,
  `gerent_coditre` INT NOT NULL,
  PRIMARY KEY (`idcap`, `gerent_coditre`),
  INDEX `fk_cap_gerent1_idx` (`gerent_coditre` ASC) VISIBLE,
  CONSTRAINT `fk_cap_gerent1`
    FOREIGN KEY (`gerent_coditre`)
    REFERENCES `centre comercial`.`gerent` (`coditre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `centre comercial`.`venedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `centre comercial`.`venedor` (
  `idvenedor` INT NOT NULL,
  PRIMARY KEY (`idvenedor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `centre comercial`.`treballador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `centre comercial`.`treballador` (
  `coditre` INT NOT NULL AUTO_INCREMENT,
  `dni` CHAR(9) NOT NULL,
  `data_ing_emp` DATE NOT NULL,
  `antig` INT(2) NOT NULL,
  `cap_idcap` INT NOT NULL,
  `cap_gerent_coditre` INT NOT NULL,
  `venedor_idvenedor` INT NOT NULL,
  PRIMARY KEY (`coditre`),
  INDEX `fk_treballador_cap1_idx` (`cap_idcap` ASC, `cap_gerent_coditre` ASC) VISIBLE,
  INDEX `fk_treballador_venedor1_idx` (`venedor_idvenedor` ASC) VISIBLE,
  CONSTRAINT `fk_treballador_cap1`
    FOREIGN KEY (`cap_idcap` , `cap_gerent_coditre`)
    REFERENCES `centre comercial`.`cap` (`idcap` , `gerent_coditre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_treballador_venedor1`
    FOREIGN KEY (`venedor_idvenedor`)
    REFERENCES `centre comercial`.`venedor` (`idvenedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `centre comercial`.`client`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `centre comercial`.`client` (
  `codcli` INT NOT NULL AUTO_INCREMENT,
  `dni` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`codcli`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `centre comercial`.`producte`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `centre comercial`.`producte` (
  `codprod` INT NOT NULL,
  `descripcio` VARCHAR(45) NOT NULL,
  `preu` DECIMAL(2) ZEROFILL NULL,
  PRIMARY KEY (`codprod`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `centre comercial`.`departament`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `centre comercial`.`departament` (
  `codidep` INT NOT NULL,
  `nom` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`codidep`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `centre comercial`.`pertany`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `centre comercial`.`pertany` (
  `departament_codidep` INT NOT NULL,
  `venedor_idvenedor` INT NOT NULL,
  `cap_idcap` INT NOT NULL,
  `cap_gerent_coditre` INT NOT NULL,
  PRIMARY KEY (`departament_codidep`, `venedor_idvenedor`, `cap_idcap`, `cap_gerent_coditre`),
  INDEX `fk_pertany_venedor1_idx` (`venedor_idvenedor` ASC) VISIBLE,
  INDEX `fk_pertany_cap1_idx` (`cap_idcap` ASC, `cap_gerent_coditre` ASC) VISIBLE,
  CONSTRAINT `fk_pertany_departament1`
    FOREIGN KEY (`departament_codidep`)
    REFERENCES `centre comercial`.`departament` (`codidep`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pertany_venedor1`
    FOREIGN KEY (`venedor_idvenedor`)
    REFERENCES `centre comercial`.`venedor` (`idvenedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pertany_cap1`
    FOREIGN KEY (`cap_idcap` , `cap_gerent_coditre`)
    REFERENCES `centre comercial`.`cap` (`idcap` , `gerent_coditre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
