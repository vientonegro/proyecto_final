/*
    *@author: Daniel
    *@version:1.0
    *@description: creacion de las tablas usuario y usuarios_reg.
				           En la tabla usuario tenemos un id autoincremental que es primary key,
                   tenemos el campo usuario y psw que son varchar, en esto dos campos se guarda el nombre
                   y la contrasenya, cuando se hace el insert en la clase home y el metodo insertRegistro.
                   En el metodo get_log haremos el select para la consulta del usuario y contrasenya 
                   para el login.
                   La tabla usuarios_reg la utilizaremos para guardar el usuario y la fecha de ingreso, este
                   proceso se hara apartir de un trigger que hemos creado que estara escuchando y en el momento 
                   que se haga un insert saltara y cogera el nombre y e introducira la fecha y hora

    *@date:2019/05/03 
    */



-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema M2
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `M2` ;

-- -----------------------------------------------------
-- Schema M2
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `M2` DEFAULT CHARACTER SET utf8 ;
USE `M2` ;

-- -----------------------------------------------------
-- Table `M2`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `M2`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `M2`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(100) NULL,
  `psw` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M2`.`usuarios_reg`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `M2`.`usuarios_reg` ;

CREATE TABLE IF NOT EXISTS `M2`.`usuarios_reg` (
  `usuarioNom` VARCHAR(100) NULL,
  `fecha` DATETIME NULL DEFAULT current_timestamp NULL,
  PRIMARY KEY (`usuarioNom`))
ENGINE = InnoDB;

USE `M2` ;

-- -----------------------------------------------------
-- Placeholder table for view `M2`.`view1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M2`.`view1` (`id` INT);

-- -----------------------------------------------------
-- View `M2`.`view1`
-- -----------------------------------------------------
DROP VIEW IF EXISTS `M2`.`view1` ;
DROP TABLE IF EXISTS `M2`.`view1`;
USE `M2`;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


-- trigger


    
delimiter $$
create trigger `m2` AFTER INSERT ON `usuarios` FOR EACH ROW

begin
	insert into usuarios_reg values (new.usuario, default);

    
end $$

delimiter ;

-- comprobación
select * from usuarios;
select * from usuarios_reg;





