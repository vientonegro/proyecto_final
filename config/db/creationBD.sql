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
-- Table `CreationModel`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CreationModel`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `CreationModel`.`usuarios` (
  `usuario` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`usuario`),
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CreationModel`.`productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CreationModel`.`productos` ;

CREATE TABLE IF NOT EXISTS `CreationModel`.`productos` (
  `idproductos` INT NOT NULL AUTO_INCREMENT,
  `categoria` INT NOT NULL,
  `titulo` VARCHAR(100) NOT NULL,
  `imagen` VARCHAR(100) NOT NULL,
  `descripcion` VARCHAR(400) NOT NULL,
  `precio` FLOAT NOT NULL,
  `usuarios_usuario` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idproductos`),
  INDEX `fk_productos_usuarios_idx` (`usuarios_usuario` ASC),
  CONSTRAINT `fk_productos_usuarios`
    FOREIGN KEY (`usuarios_usuario`)
    REFERENCES `CreationModel`.`usuarios` (`usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `CreationModel`.`usuarios`
-- -----------------------------------------------------
START TRANSACTION;
USE `CreationModel`;
INSERT INTO `CreationModel`.`usuarios` (`usuario`, `email`, `password`) VALUES ('viento', 'bla@bla', '1');
INSERT INTO `CreationModel`.`usuarios` (`usuario`, `email`, `password`) VALUES ('naruto', 'nar@nar', '1');

COMMIT;


-- -----------------------------------------------------
-- Data for table `CreationModel`.`productos`
-- -----------------------------------------------------
START TRANSACTION;
USE `CreationModel`;
INSERT INTO `CreationModel`.`productos` (`idproductos`, `categoria`, `titulo`, `imagen`, `descripcion`, `precio`, `usuarios_usuario`) VALUES (DEFAULT, 1, 'anillo', '9.jpg', 'el anillo para condenarlos a todos', 9000000, 'viento');
INSERT INTO `CreationModel`.`productos` (`idproductos`, `categoria`, `titulo`, `imagen`, `descripcion`, `precio`, `usuarios_usuario`) VALUES (DEFAULT, 2, 'artesania', 'artesania.jpg', 'los mejores alfareros desde la tierra media', 20000, 'naruto');
INSERT INTO `CreationModel`.`productos` (`idproductos`, `categoria`, `titulo`, `imagen`, `descripcion`, `precio`, `usuarios_usuario`) VALUES (DEFAULT, 3, 'pintura', '1.jpg', 'el ojo que todo lo ve de Mordor', 700000, 'viento');
INSERT INTO `CreationModel`.`productos` (`idproductos`, `categoria`, `titulo`, `imagen`, `descripcion`, `precio`, `usuarios_usuario`) VALUES (DEFAULT, 1, 'anillo', '13.jpg', 'el anillo para condenarlos a todos', 9000000, 'viento');
INSERT INTO `CreationModel`.`productos` (`idproductos`, `categoria`, `titulo`, `imagen`, `descripcion`, `precio`, `usuarios_usuario`) VALUES (DEFAULT, 2, 'artesania', '6.jpg', 'los mejores alfareros desde la tierra media', 20000, 'naruto');
INSERT INTO `CreationModel`.`productos` (`idproductos`, `categoria`, `titulo`, `imagen`, `descripcion`, `precio`, `usuarios_usuario`) VALUES (DEFAULT, 3, 'pintura', '3.jpg', 'el ojo que todo lo ve de Mordor', 700000, 'viento');
INSERT INTO `CreationModel`.`productos` (`idproductos`, `categoria`, `titulo`, `imagen`, `descripcion`, `precio`, `usuarios_usuario`) VALUES (DEFAULT, 1, 'anillo', 'joyeria.jpg', 'el anillo para condenarlos a todos', 9000000, 'viento');
INSERT INTO `CreationModel`.`productos` (`idproductos`, `categoria`, `titulo`, `imagen`, `descripcion`, `precio`, `usuarios_usuario`) VALUES (DEFAULT, 2, 'artesania', 'hea.jpg', 'los mejores alfareros desde la tierra media', 20000, 'naruto');
INSERT INTO `CreationModel`.`productos` (`idproductos`, `categoria`, `titulo`, `imagen`, `descripcion`, `precio`, `usuarios_usuario`) VALUES (DEFAULT, 3, 'pintura', 'pintura.jpg', 'el ojo que todo lo ve de Mordor', 700000, 'viento');
COMMIT;






select * from productos where categoria =1 ORDER BY `idproductos` DESC LIMIT 2;
select * from usuarios;
select * from productos;
SELECT * from productos ORDER BY `idproductos` DESC LIMIT 6;