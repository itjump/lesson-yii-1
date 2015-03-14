--
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установить режим SQL (SQL mode)
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Установка кодировки, с использованием которой клиент будет посылать запросы на сервер
--
SET NAMES 'utf8';

--
-- Описание для таблицы expert
--
CREATE TABLE IF NOT EXISTS expert (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) DEFAULT NULL COMMENT 'Имя',
  avatar VARCHAR(255) DEFAULT NULL COMMENT 'Аватар',
  rating INT(11) DEFAULT NULL COMMENT 'Рейтинг',
  status ENUM('expert') DEFAULT 'expert' COMMENT 'Статус',
  skills VARCHAR(1000) DEFAULT NULL COMMENT 'Интересы',
  description VARCHAR(1000) DEFAULT NULL COMMENT 'Описание',
  deleted TINYINT(1) DEFAULT 0,
  PRIMARY KEY (id)
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы user
--
CREATE TABLE IF NOT EXISTS user (
  id INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(255) DEFAULT NULL COMMENT 'Логин',
  password VARCHAR(255) DEFAULT NULL COMMENT 'Пароль',
  email VARCHAR(50) DEFAULT NULL COMMENT 'Email',
  date TIMESTAMP NULL DEFAULT NULL COMMENT 'Дата создания',
  name VARCHAR(50) DEFAULT NULL COMMENT 'Имя',
  role ENUM('admin','user') DEFAULT NULL COMMENT 'Роль',
  deleted TINYINT(1) DEFAULT 0,
  PRIMARY KEY (id)
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_general_ci;

-- 
-- Вывод данных для таблицы user
--
INSERT INTO user VALUES
(1, 'test', 'test', 'test@mail.ru', '0000-00-00 00:00:00', 'Test Testov', 'user', 0),
(3, 'admin', 'admin', 'admin@mail.ru', NULL, 'Admin', 'admin', 0);

-- 
-- Восстановить предыдущий режим SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;