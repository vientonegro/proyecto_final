-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema CreationModel
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `CreationModel` ;

-- -----------------------------------------------------
-- Schema CreationModel
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `CreationModel` DEFAULT CHARACTER SET utf8 ;
USE `CreationModel` ;

-- -----------------------------------------------------
-- Table `CreationModel`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CreationModel`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `CreationModel`.`usuarios` (
  `usuario` VARCHAR(100) NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CreationModel`.`productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CreationModel`.`productos` ;

CREATE TABLE IF NOT EXISTS `CreationModel`.`productos` (
  `idproductos` INT NOT NULL AUTO_INCREMENT,
  `categoria` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(400) NOT NULL,
  `precio` FLOAT NOT NULL,
  PRIMARY KEY (`idproductos`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
