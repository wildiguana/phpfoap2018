-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema inmo
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema inmo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `inmo` DEFAULT CHARACTER SET utf8 ;
USE `inmo` ;

-- -----------------------------------------------------
-- Table `inmo`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inmo`.`cliente` (
  `idcliente` INT(6) NOT NULL AUTO_INCREMENT,
  `clie_nom` VARCHAR(10) NOT NULL,
  `clie_apellido` VARCHAR(15) NOT NULL,
  `clie_tel` VARCHAR(15) NOT NULL,
  `agencias_idagencias` INT(4) NOT NULL,
  `agencias_vendedor_idvendedor` INT(6) NOT NULL,
  PRIMARY KEY (`idcliente`),
  INDEX `fk_cliente_agencias1_idx` (`agencias_idagencias` ASC, `agencias_vendedor_idvendedor` ASC) VISIBLE,
  CONSTRAINT `fk_cliente_agencias1`
    FOREIGN KEY (`agencias_idagencias` , `agencias_vendedor_idvendedor`)
    REFERENCES `inmo`.`agencias` (`idagencias` , `vendedor_idvendedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inmo`.`piso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inmo`.`piso` (
  `idpiso` INT(6) NOT NULL AUTO_INCREMENT,
  `piso_mt2` DECIMAL(2) NOT NULL,
  `piso_habs` INT(2) NOT NULL,
  `piso_lav` INT NOT NULL,
  `piso_gas` INT NOT NULL,
  `piso_orient` VARCHAR(10) NOT NULL,
  `vendedor_idvendedor` INT(6) NOT NULL,
  `vendedor_cliente_idcliente` INT(6) NOT NULL,
  PRIMARY KEY (`idpiso`, `vendedor_idvendedor`, `vendedor_cliente_idcliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inmo`.`vendedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inmo`.`vendedor` (
  `idvendedor` INT(6) NOT NULL AUTO_INCREMENT,
  `vend_nom` VARCHAR(10) NOT NULL,
  `vend_apellidos` VARCHAR(15) NOT NULL,
  `vend_tel` VARCHAR(15) NULL,
  `cliente_idcliente` INT(6) NOT NULL,
  `piso_idpiso` INT(6) NOT NULL,
  `piso_vendedor_idvendedor` INT(6) NOT NULL,
  `piso_vendedor_cliente_idcliente` INT(6) NOT NULL,
  PRIMARY KEY (`idvendedor`, `cliente_idcliente`, `piso_idpiso`, `piso_vendedor_idvendedor`, `piso_vendedor_cliente_idcliente`),
  INDEX `fk_vendedor_cliente1_idx` (`cliente_idcliente` ASC) VISIBLE,
  INDEX `fk_vendedor_piso1_idx` (`piso_idpiso` ASC, `piso_vendedor_idvendedor` ASC, `piso_vendedor_cliente_idcliente` ASC) VISIBLE,
  CONSTRAINT `fk_vendedor_cliente1`
    FOREIGN KEY (`cliente_idcliente`)
    REFERENCES `inmo`.`cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vendedor_piso1`
    FOREIGN KEY (`piso_idpiso` , `piso_vendedor_idvendedor` , `piso_vendedor_cliente_idcliente`)
    REFERENCES `inmo`.`piso` (`idpiso` , `vendedor_idvendedor` , `vendedor_cliente_idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inmo`.`agencias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inmo`.`agencias` (
  `idagencias` INT(4) NOT NULL AUTO_INCREMENT,
  `age_dir` VARCHAR(45) NOT NULL,
  `age_tel` VARCHAR(15) NOT NULL,
  `zona` VARCHAR(10) NOT NULL,
  `vendedor_idvendedor` INT(6) NOT NULL,
  PRIMARY KEY (`idagencias`, `vendedor_idvendedor`),
  INDEX `fk_agencias_vendedor_idx` (`vendedor_idvendedor` ASC) VISIBLE,
  CONSTRAINT `fk_agencias_vendedor`
    FOREIGN KEY (`vendedor_idvendedor`)
    REFERENCES `inmo`.`vendedor` (`idvendedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inmo`.`alquiler`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inmo`.`alquiler` (
  `idalquiler` INT(4) NOT NULL AUTO_INCREMENT,
  `alq_precio` DECIMAL(2) NOT NULL,
  `alq_fianza` DECIMAL(2) NOT NULL,
  `alq_paga` DECIMAL(2) NOT NULL,
  `piso_idpiso` INT(6) NOT NULL,
  PRIMARY KEY (`idalquiler`, `piso_idpiso`),
  INDEX `fk_alquiler_piso1_idx` (`piso_idpiso` ASC) VISIBLE,
  CONSTRAINT `fk_alquiler_piso1`
    FOREIGN KEY (`piso_idpiso`)
    REFERENCES `inmo`.`piso` (`idpiso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inmo`.`venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inmo`.`venta` (
  `idventa` INT NOT NULL AUTO_INCREMENT,
  `venta_precio` DECIMAL(2) NOT NULL,
  `venta_hipo` VARCHAR(10) NOT NULL,
  `venta_paga` DECIMAL(2) NOT NULL,
  `piso_idpiso` INT(6) NOT NULL,
  PRIMARY KEY (`idventa`, `piso_idpiso`),
  INDEX `fk_venta_piso1_idx` (`piso_idpiso` ASC) VISIBLE,
  CONSTRAINT `fk_venta_piso1`
    FOREIGN KEY (`piso_idpiso`)
    REFERENCES `inmo`.`piso` (`idpiso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inmo`.`propietario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inmo`.`propietario` (
  `idpropietario` INT(4) NOT NULL AUTO_INCREMENT,
  `prop_nom` VARCHAR(10) NOT NULL,
  `prop_apellido` VARCHAR(15) NOT NULL,
  `prop_tel` VARCHAR(15) NOT NULL,
  `prop_direccion` VARCHAR(45) NOT NULL,
  `piso_idpiso` INT(6) NOT NULL,
  PRIMARY KEY (`idpropietario`, `piso_idpiso`),
  INDEX `fk_propietario_piso1_idx` (`piso_idpiso` ASC) VISIBLE,
  CONSTRAINT `fk_propietario_piso1`
    FOREIGN KEY (`piso_idpiso`)
    REFERENCES `inmo`.`piso` (`idpiso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
