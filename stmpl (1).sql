-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Pát 29. dub 2016, 17:40
-- Verze serveru: 5.5.49-0ubuntu0.14.04.1
-- Verze PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `stmpl`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `short` varchar(10) NOT NULL,
  `long` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Vypisuji data pro tabulku `category`
--

INSERT INTO `category` (`id`, `short`, `long`) VALUES
(4, 'ŽCA', 'žáci A'),
(5, 'ŽKA', 'žákyn? A');

-- --------------------------------------------------------

--
-- Struktura tabulky `startList`
--

CREATE TABLE IF NOT EXISTS `startList` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `number` int(15) NOT NULL,
  `category` int(10) NOT NULL,
  `startTimestamp` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mezicas1` int(20) NOT NULL,
  `mezicas2` int(20) NOT NULL,
  `mezicas3` int(20) NOT NULL,
  `mezicas4` int(20) NOT NULL,
  `mezicas5` int(20) NOT NULL,
  `mezicas6` int(20) NOT NULL,
  `mezicas7` int(20) NOT NULL,
  `mezicas8` int(20) NOT NULL,
  `mezicas9` int(20) NOT NULL,
  `mezicas10` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Vypisuji data pro tabulku `startList`
--

INSERT INTO `startList` (`id`, `number`, `category`, `startTimestamp`, `name`, `mezicas1`, `mezicas2`, `mezicas3`, `mezicas4`, `mezicas5`, `mezicas6`, `mezicas7`, `mezicas8`, `mezicas9`, `mezicas10`) VALUES
(100, 49, 4, 1461917310, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(99, 48, 4, 1461917300, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(98, 47, 4, 1461917290, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(97, 46, 4, 1461917280, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 45, 4, 1461917270, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 44, 4, 1461917260, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 43, 4, 1461917250, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 42, 4, 1461917240, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 41, 4, 1461917230, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 40, 4, 1461917220, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 39, 4, 1461917210, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 38, 4, 1461917200, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 37, 4, 1461917190, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 36, 4, 1461917180, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 35, 4, 1461917170, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 34, 4, 1461917160, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 33, 4, 1461917150, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 32, 4, 1461917140, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 31, 4, 1461917130, '', 1461943988, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 30, 4, 1461917120, '', 1461943259, 1461943988, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 29, 4, 1461917110, '', 1461943988, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 28, 4, 1461917100, '', 1461943977, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 27, 4, 1461917090, '', 1461943977, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 26, 4, 1461917080, '', 1461943977, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 25, 4, 1461917070, '', 1461943976, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 24, 4, 1461917060, '', 1461943976, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 23, 4, 1461917050, '', 1461943976, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 22, 4, 1461917040, '', 1461943976, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 21, 4, 1461917030, '', 1461943975, 1461944146, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 20, 4, 1461917020, '', 1461943975, 1461944146, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 19, 4, 1461917010, '', 1461943975, 1461944145, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 18, 4, 1461917000, '', 1461943975, 1461944145, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 17, 4, 1461916990, '', 1461943975, 1461944145, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 16, 4, 1461916980, '', 1461943974, 1461944145, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 15, 4, 1461916970, '', 1461943462, 1461944144, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 14, 4, 1461916960, '', 1461943462, 1461944144, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 13, 4, 1461916950, '', 1461943462, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 12, 4, 1461916940, '', 1461943462, 1461944143, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 11, 4, 1461916930, '', 1461943461, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 10, 4, 1461916920, '', 1461943461, 1461944142, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 9, 4, 1461916910, '', 1461943461, 1461944141, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 8, 4, 1461916900, '', 1461943442, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7, 4, 1461916890, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 6, 4, 1461916880, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 5, 4, 1461916870, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 4, 4, 1461916860, '', 1461944136, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 3, 4, 1461916850, '', 1461944136, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 2, 4, 1461916840, '', 1461944138, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 1, 4, 1461916830, '', 1461943413, 1461944054, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 50, 5, 1461917810, 'hfgfdh', 1461941526, 1461941528, 1461941530, 1461942171, 1461942187, 1461943284, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
