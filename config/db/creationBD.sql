-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

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
-- Table `CreationModel`.`usuarioVende`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CreationModel`.`usuarioVende` ;

CREATE TABLE IF NOT EXISTS `CreationModel`.`usuarioVende` (
  `idUsuarios` INT NULL AUTO_INCREMENT,
  `nick` VARCHAR(45) NULL,
  `email` VARCHAR(100) NULL,
  `password` VARCHAR(45) NULL,
  `nombre` VARCHAR(45) NULL,
  `apellidos` VARCHAR(45) NULL,
  `movil` INT NULL,
  `ciudad` VARCHAR(45) NULL,
  `calle` VARCHAR(45) NULL,
  `piso` INT NULL,
  `puerta` INT NULL,
  `codigoPostal` INT NULL,
  PRIMARY KEY (`idUsuarios`),
  UNIQUE INDEX `nick_UNIQUE` (`nick` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CreationModel`.`productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CreationModel`.`productos` ;

CREATE TABLE IF NOT EXISTS `CreationModel`.`productos` (
  `idProducto` INT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(100) NULL,
  `precio` FLOAT NULL,
  `idUsuarios` INT NOT NULL,
  PRIMARY KEY (`idProducto`),
  INDEX `fk_productos_usuarios_idx` (`idUsuarios` ASC),
  CONSTRAINT `fkProductos`
    FOREIGN KEY (`idUsuarios`)
    REFERENCES `CreationModel`.`usuarioVende` (`idUsuarios`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `CreationModel`.`usuarioVende`
-- -----------------------------------------------------
START TRANSACTION;
USE `CreationModel`;
INSERT INTO `CreationModel`.`usuarioVende` (`idUsuarios`, `nick`, `email`, `password`, `nombre`, `apellidos`, `movil`, `ciudad`, `calle`, `piso`, `puerta`, `codigoPostal`) VALUES (null, 'capi', 'capi@capi.com', '1234', 'luis', 'rock', 623456789, 'barcelona', 'balmes', 1, 2, 08980);
INSERT INTO `CreationModel`.`usuarioVende` (`idUsuarios`, `nick`, `email`, `password`, `nombre`, `apellidos`, `movil`, `ciudad`, `calle`, `piso`, `puerta`, `codigoPostal`) VALUES (NULL, 'hulk', 'hulk@hulk.com', '4321', 'dayana', 'rice', 987654321, 'madrid', 'sala', 3, 4, 07896);

COMMIT;


-- -----------------------------------------------------
-- Data for table `CreationModel`.`productos`
-- -----------------------------------------------------
START TRANSACTION;
USE `CreationModel`;
INSERT INTO `CreationModel`.`productos` (`idProducto`, `categoria`, `precio`, `idUsuarios`) VALUES (NULL, 'joyeria', 50, 1);
INSERT INTO `CreationModel`.`productos` (`idProducto`, `categoria`, `precio`, `idUsuarios`) VALUES (NULL, 'pintura', 700, 2);
INSERT INTO `CreationModel`.`productos` (`idProducto`, `categoria`, `precio`, `idUsuarios`) VALUES (NULL, 'artesania', 200, 2);
INSERT INTO `CreationModel`.`productos` (`idProducto`, `categoria`, `precio`, `idUsuarios`) VALUES (NULL, 'joyeria', 2000, 1);
INSERT INTO `CreationModel`.`productos` (`idProducto`, `categoria`, `precio`, `idUsuarios`) VALUES (NULL, 'pintura', 50000, 1);

COMMIT;

