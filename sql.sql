-- Version: 1.0
-- Project: Facitio
-- Author: Garoupa Soluções
DROP SCHEMA IF EXISTS `DB_Facitio`;
CREATE SCHEMA IF NOT EXISTS `DB_Facitio` DEFAULT CHARACTER SET utf8mb4;
USE `DB_Facitio`;

/*----------ADMIN----------*/
CREATE TABLE IF NOT EXISTS `DB_Facitio`.`tb_login_admin` (
  `admin_id` INT NOT NULL AUTO_INCREMENT,
  `admin_nome` VARCHAR(45) NOT NULL,
  `admin_sobrenome` VARCHAR(45) NOT NULL,
  `admin_email` VARCHAR(45) NOT NULL,
  `admin_cpf` VARCHAR(45) NOT NULL,
  `admin_rg` VARCHAR(45) NOT NULL,
  `admin_senha` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`admin_id`)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;
/*----------END ADMIN----------*/

/*----------CLIENTE----------*/
CREATE TABLE IF NOT EXISTS `DB_Facitio`.`tb_login_cliente` (
  `cliente_id` INT NOT NULL AUTO_INCREMENT,
  `cliente_nome` VARCHAR(45) NOT NULL,
  `cliente_sobrenome` VARCHAR(45) NOT NULL,
  `cliente_email` VARCHAR(45) NOT NULL,
  `cliente_cpf` VARCHAR(45) NOT NULL,
  `cliente_rg` VARCHAR(45) NOT NULL,
  `cliente_datanasc` DATE NOT NULL,
  `cliente_endereco` VARCHAR(45) NOT NULL,
  `cliente_contato` VARCHAR(45),
  `cliente_senha` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`cliente_id`)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE IF NOT EXISTS `DB_Facitio`.`tb_endereco_cliente` (
  `end_id` INT NOT NULL AUTO_INCREMENT,
  `end_nome` VARCHAR(45) NOT NULL,
  `end_num` VARCHAR(45) NOT NULL,
  `end_complemento` VARCHAR(45) NOT NULL,
  `end_bairro` VARCHAR(45) NOT NULL,
  `end_cidade` VARCHAR(45) NOT NULL,
  `end_estado` VARCHAR(45) NOT NULL,
  `end_cep` VARCHAR(45) NOT NULL,
  `cliente_id` INT NOT NULL,

  CONSTRAINT
    FOREIGN KEY (`cliente_id`)
    REFERENCES `DB_Facitio`.`tb_login_cliente` (`cliente_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,

  PRIMARY KEY (`end_id`)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;
/*----------END CLIENTE----------*/

/*----------PROFISSIONAL----------*/
CREATE TABLE IF NOT EXISTS `DB_Facitio`.`tb_login_profissional` (
  `profissional_id` INT NOT NULL AUTO_INCREMENT,
  `profissional_nome` VARCHAR(45) NOT NULL,
  `profissional_sobrenome` VARCHAR(45) NOT NULL,
  `profissional_email` VARCHAR(45) NOT NULL,
  `profissional_cpf` VARCHAR(45) NOT NULL,
  `profissional_rg` VARCHAR(45) NOT NULL,
  `profissional_datanasc` DATE NOT NULL,
  `profissional_endereco` VARCHAR(45) NOT NULL,
  `profissional_contato` VARCHAR(45) NOT NULL,
  `profissional_senha` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`profissional_id`)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE IF NOT EXISTS `DB_Facitio`.`tb_endereco_profissional` (
  `end_id` INT NOT NULL AUTO_INCREMENT,
  `end_nome` VARCHAR(45) NOT NULL,
  `end_num` VARCHAR(45) NOT NULL,
  `end_complemento` VARCHAR(45) NOT NULL,
  `end_bairro` VARCHAR(45) NOT NULL,
  `end_cidade` VARCHAR(45) NOT NULL,
  `end_estado` VARCHAR(45) NOT NULL,
  `end_cep` VARCHAR(45) NOT NULL,
  `profissional_id` INT NOT NULL,

  CONSTRAINT
    FOREIGN KEY (`profissional_id`)
    REFERENCES `DB_Facitio`.`tb_login_profissional` (`profissional_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,

    PRIMARY KEY (`end_id`)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;
/*----------END PROFISSIONAL----------*/

/*--------------SERVIÇO---------------*/
CREATE TABLE IF NOT EXISTS `DB_Facitio`.`tb_servico` (
  `servico_id` INT NOT NULL AUTO_INCREMENT,
  `servico_nome` VARCHAR(255) NOT NULL,
  `servico_desc` VARCHAR(1000) NOT NULL,
  `servico_aval` FLOAT NOT NULL,
  `profissional_id` INT(11) NOT NULL,

  CONSTRAINT
    FOREIGN KEY (`profissional_id`)
    REFERENCES `DB_Facitio`.`tb_login_profissional` (`profissional_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  
  PRIMARY KEY(`servico_id`)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;
/*------------END SERVIÇO-------------*/

/*----------SOLICITAÇÃO----------*/
CREATE TABLE IF NOT EXISTS `DB_Facitio`.`tb_solicitacao` (
  `solicitacao_id` INT NOT NULL AUTO_INCREMENT,
  `solicitacao_data` VARCHAR(45) NULL DEFAULT NULL,
  `solicitacao_status` ENUM("S", "N") NULL DEFAULT NULL,
  `cliente_id` INT(11) NOT NULL,
  `profissional_id` INT(11) NOT NULL,
  `servico_id` INT(11) NOT NULL,
  
  INDEX `fk_cliente_id_idx` (`cliente_id` ),
  INDEX `fk_profissional_id_idx` (`profissional_id`),
  
  CONSTRAINT `fk_cliente_id`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `DB_Facitio`.`tb_login_cliente` (`cliente_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
    
  CONSTRAINT `fk_profissional_id`
    FOREIGN KEY (`profissional_id`)
    REFERENCES `DB_Facitio`.`tb_login_profissional` (`profissional_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  
  CONSTRAINT `fk_servico_id`
    FOREIGN KEY (`servico_id`)
    REFERENCES `DB_Facitio`.`tb_servico` (`servico_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  
   PRIMARY KEY (`solicitacao_id`)
   
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;
/*----------END PROFISSIONAL----------*/

-- SELECT * FROM tb_login_cliente;
-- SELECT * FROM tb_login_profissional;
-- SELECT * FROM tb_solicitacao;

-- INSERT INTO tb_login_cliente VALUES (default,"Gustavo","Piovani","guspiovani@gmail.com","123456789-10","2002-03-02","Rua","(12)12345678","senha123");
-- INSERT INTO tb_login_profissional VALUES (default,"Henrique","Pinto","henriqferreira@gmail.com","109876543-21","2003-10-10","Rua","(12)87654321","senha123");
-- INSERT INTO tb_solicitacao VALUES (default,"2022-09-12","S","1","1");

-- SELECT cliente_nome, cliente_login, solicitacao_data AS DIA_CHAMADO, solicitacao_status FROM tb_login_cliente
-- INNER JOIN `DB_Facitio`.`tb_solicitacao` ON `DB_Facitio`.`tb_solicitacao`.solicitacao_id = tb_solicitacao.cliente_id
-- WHERE cliente_email = 'guspiovani@gmail.com';