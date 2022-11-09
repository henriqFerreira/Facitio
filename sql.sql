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
  `cliente_contato` VARCHAR(45),
  `cliente_senha` VARCHAR(64) NOT NULL,
  `cliente_saldo`FLOAT DEFAULT 0.00,
  `cliente_foto` LONGBLOB DEFAULT NULL,
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

INSERT INTO tb_login_cliente VALUES (default, "Ruan", "teste", "Ruan@email.com", "123.456.789-10", "98.765.432-10", "2000-02-02", "(12) 34567-8900", "senha", default, default);
INSERT INTO tb_login_cliente VALUES (default, "Claudio", "teste", "Claudio@email.com", "123.456.789-20", "98.765.432-20", "2000-02-02", "(12) 34567-8900", "senha", default, default);
INSERT INTO tb_login_cliente VALUES (default, "Paulo", "teste", "Paulo@email.com", "123.456.789-30", "98.765.432-30", "2000-02-02", "(12) 34567-8900", "senha", default, default);
INSERT INTO tb_login_cliente VALUES (default, "Cristina", "teste", "Cristina@email.com", "123.456.789-40", "98.765.432-40", "2000-02-02", "(12) 34567-8900", "senha", default, default);

INSERT INTO tb_endereco_cliente VALUES (default, "Nome", "Num", "Complemento", "Bairro", "Cidade", "Estado", "CEP", 1);
INSERT INTO tb_endereco_cliente VALUES (default, "Nome", "Num", "Complemento", "Bairro", "Cidade", "Estado", "CEP", 2);
INSERT INTO tb_endereco_cliente VALUES (default, "Nome", "Num", "Complemento", "Bairro", "Cidade", "Estado", "CEP", 3);
INSERT INTO tb_endereco_cliente VALUES (default, "Nome", "Num", "Complemento", "Bairro", "Cidade", "Estado", "CEP", 4);
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
  `profissional_contato` VARCHAR(45) NOT NULL,
  `profissional_senha` VARCHAR(64) NOT NULL,
  `profissional_saldo`FLOAT DEFAULT 0.00,
  `profissional_foto` LONGBLOB DEFAULT NULL,
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

INSERT INTO tb_login_profissional VALUES (default, "Vinicius", "teste", "Vinicius@email.com", "123.456.789-01", "98.765.432-01", "2000-02-02", "(12) 34567-8900", "senha", default, default);
INSERT INTO tb_login_profissional VALUES (default, "Angélica", "teste", "Angélica@email.com", "123.456.789-02", "98.765.432-02", "2000-02-02", "(12) 34567-8900", "senha", default, default);
INSERT INTO tb_login_profissional VALUES (default, "Alberto", "teste", "Alberto@email.com", "123.456.789-03", "98.765.432-03", "2000-02-02", "(12) 34567-8900", "senha", default, default);
INSERT INTO tb_login_profissional VALUES (default, "Yago", "teste", "Yago@email.com", "123.456.789-04", "98.765.432-04", "2000-02-02", "(12) 34567-8900", "senha", default, default);

INSERT INTO tb_endereco_profissional VALUES (default, "Nome", "Num", "Complemento", "Bairro", "Cidade", "Estado", "CEP", 1);
INSERT INTO tb_endereco_profissional VALUES (default, "Nome", "Num", "Complemento", "Bairro", "Cidade", "Estado", "CEP", 2);
INSERT INTO tb_endereco_profissional VALUES (default, "Nome", "Num", "Complemento", "Bairro", "Cidade", "Estado", "CEP", 3);
INSERT INTO tb_endereco_profissional VALUES (default, "Nome", "Num", "Complemento", "Bairro", "Cidade", "Estado", "CEP", 4);

/*----------END PROFISSIONAL----------*/

/*--------------SERVIÇO---------------*/
CREATE TABLE IF NOT EXISTS `DB_Facitio`.`tb_servico` (
  `servico_id` INT NOT NULL AUTO_INCREMENT,
  `servico_nome` VARCHAR(255) NOT NULL,
  `servico_desc` VARCHAR(1000) NOT NULL,
  `servico_aval` FLOAT DEFAULT 0.0,
  `servico_valor` FLOAT NOT NULL,
  `servico_foto` LONGBLOB DEFAULT NULL,
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

INSERT INTO tb_servico VALUES (default, "Serviço 1", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, facilis?", default, 10.0, default, 1);
INSERT INTO tb_servico VALUES (default, "Serviço 2", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, facilis?", default, 10.0, default, 1);

INSERT INTO tb_servico VALUES (default, "Serviço 1", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, facilis?", default, 10.0, default, 2);
INSERT INTO tb_servico VALUES (default, "Serviço 2", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, facilis?", default, 10.0, default, 2);

INSERT INTO tb_servico VALUES (default, "Serviço 1", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, facilis?", default, 10.0, default, 3);
INSERT INTO tb_servico VALUES (default, "Serviço 2", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, facilis?", default, 10.0, default, 3);

INSERT INTO tb_servico VALUES (default, "Serviço 1", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, facilis?", default, 10.0, default, 4);
INSERT INTO tb_servico VALUES (default, "Serviço 2", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, facilis?", default, 10.0, default, 4);
/*------------END SERVIÇO-------------*/

/*----------SOLICITAÇÃO----------*/
CREATE TABLE IF NOT EXISTS `DB_Facitio`.`tb_solicitacao` (
  `solicitacao_id` INT NOT NULL AUTO_INCREMENT,
  `solicitacao_data` VARCHAR(45) NULL DEFAULT NULL,
  `solicitacao_status` ENUM("S", "N", "A") NULL DEFAULT NULL,
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

INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 1, 1, 1);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 1, 2, 1);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 1, 3, 1);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 1, 4, 1);

INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 1, 1, 2);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 1, 2, 2);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 1, 3, 2);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 1, 4, 2);

INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 2, 1, 1);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 2, 2, 1);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 2, 3, 1);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 2, 4, 1);

INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 2, 1, 2);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 2, 2, 2);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 2, 3, 2);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 2, 4, 2);

INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 3, 1, 1);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 3, 2, 1);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 3, 3, 1);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 3, 4, 1);

INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 3, 1, 2);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 3, 2, 2);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 3, 3, 2);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 3, 4, 2);

INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 4, 1, 1);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 4, 2, 1);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 4, 3, 1);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 4, 4, 1);

INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 4, 1, 2);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 4, 2, 2);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 4, 3, 2);
INSERT INTO tb_solicitacao VALUES (default, CURDATE(), "A", 4, 4, 2);
/*----------END PROFISSIONAL----------*/

SELECT * FROM tb_login_cliente;
SELECT * FROM tb_endereco_cliente;
SELECT * FROM tb_login_profissional;
SELECT * FROM tb_endereco_profissional;
SELECT * FROM tb_solicitacao;
SELECT * FROM tb_servico;