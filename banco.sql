CREATE SCHEMA IF NOT EXISTS `prova` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `prova` ;

CREATE  TABLE IF NOT EXISTS `prova`.`tarefas` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(96) NOT NULL ,
  `descricao` VARCHAR(96) NOT NULL ,
  `prioridade` INT NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `tarefas` (`id`, `titulo`, `descricao`, `prioridade`) VALUES
(1, 'Instalar impressora', 'Favor instalar a impressora no nono andar', 2),
(2, 'Formatar PC', 'É preciso formatar o PC da sala de reunião', 1);