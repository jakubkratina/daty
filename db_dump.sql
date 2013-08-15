-- Adminer 3.7.1 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '+02:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `daty` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_czech_ci */;
USE `daty`;

DROP TABLE IF EXISTS `debtors`;
CREATE TABLE `debtors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district_number` int(11) NOT NULL,
  `district_name` varchar(60) COLLATE utf8_czech_ci NOT NULL,
  `pid` varchar(60) COLLATE utf8_czech_ci NOT NULL,
  `name` varchar(60) COLLATE utf8_czech_ci NOT NULL,
  `address` text COLLATE utf8_czech_ci NOT NULL,
  `premium` float(10,2) NOT NULL,
  `penalties` float(10,2) NOT NULL,
  `debt` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


-- 2013-08-15 23:58:38