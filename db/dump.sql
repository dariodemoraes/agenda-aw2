-- MySQL Script generated by MySQL Workbench
-- Mon Sep 30 00:04:16 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema agenda
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema agenda
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `agenda` DEFAULT CHARACTER SET utf8 ;
USE `agenda` ;

-- -----------------------------------------------------
-- Table `agenda`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`aluno` (
  `prontuario` CHAR(7) NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `senhaResponsavel` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`prontuario`),
  UNIQUE INDEX `prontuario_UNIQUE` (`prontuario` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agenda`.`disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`disciplina` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `professor` VARCHAR(45) NULL,
  `nota1` DECIMAL NULL,
  `nota2` DECIMAL NULL,
  `nota3` DECIMAL NULL,
  `nota4` DECIMAL NULL,
  `frequencia` FLOAT NULL,
  `descricao` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agenda`.`evento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`evento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` DATETIME(1) NOT NULL,
  `descricao` VARCHAR(255) NULL,
  `local` VARCHAR(150) NULL,
  `aluno_prontuario` CHAR(7) NOT NULL,
  `disciplina_id` INT NOT NULL,
  PRIMARY KEY (`id`, `aluno_prontuario`, `disciplina_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  INDEX `fk_evento_aluno_idx` (`aluno_prontuario` ASC) VISIBLE,
  INDEX `fk_evento_disciplina1_idx` (`disciplina_id` ASC) VISIBLE,
  CONSTRAINT `fk_evento_aluno`
    FOREIGN KEY (`aluno_prontuario`)
    REFERENCES `agenda`.`aluno` (`prontuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_evento_disciplina1`
    FOREIGN KEY (`disciplina_id`)
    REFERENCES `agenda`.`disciplina` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;