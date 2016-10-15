SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';



-- -----------------------------------------------------
-- Table `mydb`.`detalhe_loja`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `detalhe_loja` (
  `loja_id` INT(11) NOT NULL,
  `nome` VARCHAR(45) NULL,
  `endereco` VARCHAR(45) NULL,
  `tipo_de_loja` SMALLINT NULL,
  `estado` CHAR(2) NULL,
  `cidade` VARCHAR(45) NULL,
  `usuario` VARCHAR(15) NOT NULL,
  `senha` VARCHAR(45) NULL,
  `cnpj` VARCHAR(13) NULL,
  PRIMARY KEY (`loja_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tipo_de_loja`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tipo_de_loja` (
  `tipo_de_loja` SMALLINT NOT NULL,
  `descricao_tipo` VARCHAR(15) NULL,
  PRIMARY KEY (`tipo_de_loja`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`table1` (
  `classe_de_prodtuo` INT NOT NULL,
  PRIMARY KEY (`classe_de_prodtuo`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
