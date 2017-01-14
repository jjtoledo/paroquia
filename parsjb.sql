SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `parsjb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;

DROP USER IF EXISTS `sisParsjb`@`localhost`;
CREATE USER `sisParsjb`@`localhost` IDENTIFIED BY 'parsjb_bd';
GRANT ALL PRIVILEGES ON `parsjb`.* TO `sisParsjb`@`localhost`;
FLUSH PRIVILEGES;

CREATE TABLE IF NOT EXISTS `parsjb`.`comunidades` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NULL DEFAULT NULL,
  `historico` TEXT NULL DEFAULT NULL,
  `foto_padroeiro` VARCHAR(200) NULL DEFAULT NULL,
  `nome_padroeiro` VARCHAR(200) NULL DEFAULT NULL,
  `hora_celeb` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `parsjb`.`eventos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo` INT(11) NULL DEFAULT NULL,
  `texto` TEXT NULL DEFAULT NULL,
  `comunidade_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `comunidade_id`),
  INDEX `fk_eventos_comunidades1_idx` (`comunidade_id` ASC),
  CONSTRAINT `fk_eventos_comunidades1`
    FOREIGN KEY (`comunidade_id`)
    REFERENCES `parsjb`.`comunidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `parsjb`.`foto_comunidades` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `foto` VARCHAR(200) NULL DEFAULT NULL,
  `descricao` VARCHAR(200) NULL DEFAULT NULL,
  `comunidade_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `comunidade_id`),
  INDEX `fk_foto_comunidades_comunidades1_idx` (`comunidade_id` ASC),
  CONSTRAINT `fk_foto_comunidades_comunidades1`
    FOREIGN KEY (`comunidade_id`)
    REFERENCES `parsjb`.`comunidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `parsjb`.`foto_eventos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `foto` VARCHAR(200) NULL DEFAULT NULL,
  `descricao` VARCHAR(200) NULL DEFAULT NULL,
  `evento_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `evento_id`),
  INDEX `fk_foto_eventos_eventos1_idx` (`evento_id` ASC),
  CONSTRAINT `fk_foto_eventos_eventos1`
    FOREIGN KEY (`evento_id`)
    REFERENCES `parsjb`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `parsjb`.`padres` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NULL DEFAULT NULL,
  `texto` TEXT NULL DEFAULT NULL,
  `foto` VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `parsjb`.`sacramentos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(20) NULL DEFAULT NULL,
  `texto` TEXT NULL DEFAULT NULL,
  `foto` VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `parsjb`.`pastorals` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NULL DEFAULT NULL,
  `descricao` TEXT NULL DEFAULT NULL,
  `comunidade_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `comunidade_id`),
  INDEX `fk_pastorais_comunidades_idx` (`comunidade_id` ASC),
  CONSTRAINT `fk_pastorais_comunidades`
    FOREIGN KEY (`comunidade_id`)
    REFERENCES `parsjb`.`comunidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `parsjb`.`admins` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(100) NULL DEFAULT NULL,
  `senha` VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
