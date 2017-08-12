-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2013 at 07:53 PM
-- Server version: 5.1.40
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_stud`
--

-- --------------------------------------------------------

--
-- Table structure for table `avtors`
--

CREATE TABLE IF NOT EXISTS `avtors` (
  `id_avtor` int(11) NOT NULL AUTO_INCREMENT,
  `nick_name` varchar(15) NOT NULL,
  `password` varchar(64) NOT NULL,
  `cont_icq` varchar(15) NOT NULL,
  `cont_vk` varchar(25) NOT NULL,
  `cont_odn` varchar(25) NOT NULL,
  `cont_skype` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `cont_spec` varchar(100) NOT NULL,
  `banned` datetime NOT NULL,
  `date_registration` datetime NOT NULL,
  `date_last` datetime NOT NULL,
  `reyting` int(11) NOT NULL,
  `schet` smallint(5) unsigned NOT NULL,
  `linking` tinyint(4) NOT NULL,
  `nkarta` varchar(20) NOT NULL,
  `nyandex` varchar(16) NOT NULL,
  `ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id_avtor`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `avtors`
--

INSERT INTO `avtors` (`id_avtor`, `nick_name`, `password`, `cont_icq`, `cont_vk`, `cont_odn`, `cont_skype`, `city`, `cont_spec`, `banned`, `date_registration`, `date_last`, `reyting`, `schet`, `linking`, `nkarta`, `nyandex`, `ip`) VALUES
(2, '123123', 'aceff7c85e5ac23e5065b236dc476f7d4fe3f367018ee68b52ee8593d66a2e02', '123123', '123123', '123123', '123123', '123123', '123123', '0000-00-00 00:00:00', '2013-01-25 16:18:57', '2013-01-27 03:45:40', 0, 0, 0, '0', '0', ''),
(4, 'avtor2', 'aceff7c85e5ac23e5065b236dc476f7d4fe3f367018ee68b52ee8593d66a2e02', '12', '122', '21', '21', '21', '21', '0000-00-00 00:00:00', '2013-01-26 23:05:37', '2013-02-01 21:51:36', 0, 1000, 0, '1111222233334444', '410011576579853', '');

-- --------------------------------------------------------

--
-- Table structure for table `banned`
--

CREATE TABLE IF NOT EXISTS `banned` (
  `ip` varchar(20) NOT NULL,
  `why` varchar(50) NOT NULL,
  `type` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `banned`
--


-- --------------------------------------------------------

--
-- Table structure for table `ocenka`
--

CREATE TABLE IF NOT EXISTS `ocenka` (
  `id_ocenka` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_zakaz` int(10) unsigned NOT NULL,
  `id_avtor` int(10) unsigned NOT NULL,
  `time_ocenka` datetime NOT NULL,
  `price_avtor` smallint(5) unsigned NOT NULL,
  `price_all` smallint(5) unsigned NOT NULL,
  `price_partner` smallint(5) unsigned NOT NULL,
  `vibor` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_ocenka`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `ocenka`
--

INSERT INTO `ocenka` (`id_ocenka`, `id_zakaz`, `id_avtor`, `time_ocenka`, `price_avtor`, `price_all`, `price_partner`, `vibor`) VALUES
(10, 6, 4, '2013-01-28 17:46:15', 6000, 7200, 576, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oplata`
--

CREATE TABLE IF NOT EXISTS `oplata` (
  `id_oplata` int(11) NOT NULL AUTO_INCREMENT,
  `id_zakaz` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `time_oplata` varchar(30) NOT NULL,
  `summa` int(11) NOT NULL,
  `sposob` tinyint(4) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `provedeno` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_oplata`),
  UNIQUE KEY `id_oplata` (`id_oplata`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `oplata`
--

INSERT INTO `oplata` (`id_oplata`, `id_zakaz`, `id_student`, `time_oplata`, `summa`, `sposob`, `foto`, `provedeno`) VALUES
(1, 3, 7, '15:50', 750, 1, './uploads/oplata/7left_menu.jpg', 1),
(2, 4, 7, '15:50 СЃРµРіРѕРґРЅСЏ', 750, 1, './uploads/oplata/7left_menu.jpg', 1),
(3, 3, 7, '13:21', 750, 1, './uploads/oplata/7left_menu_niz.jpg', 1),
(4, 6, 7, '13^20', 7200, 1, './uploads/oplata/7edit.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id_partner` int(11) NOT NULL AUTO_INCREMENT,
  `nick_name` varchar(15) NOT NULL,
  `password` varchar(64) NOT NULL,
  `cont_icq` varchar(15) NOT NULL,
  `cont_vk` varchar(25) NOT NULL,
  `cont_odn` varchar(25) NOT NULL,
  `cont_skype` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `cont_spec` varchar(100) NOT NULL,
  `date_registration` datetime NOT NULL,
  `date_last` datetime NOT NULL,
  `banned` datetime NOT NULL,
  `schet` smallint(5) unsigned NOT NULL,
  `link` tinyint(4) NOT NULL,
  `nkarta` int(10) unsigned NOT NULL,
  `nyandex` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_partner`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id_partner`, `nick_name`, `password`, `cont_icq`, `cont_vk`, `cont_odn`, `cont_skype`, `city`, `cont_spec`, `date_registration`, `date_last`, `banned`, `schet`, `link`, `nkarta`, `nyandex`) VALUES
(2, 'partner1', 'aceff7c85e5ac23e5065b236dc476f7d4fe3f367018ee68b52ee8593d66a2e02', '', '', '', '', '', '', '2013-01-26 04:55:46', '2013-02-02 04:45:19', '0000-00-00 00:00:00', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rest`
--

CREATE TABLE IF NOT EXISTS `rest` (
  `id_rest` int(11) NOT NULL AUTO_INCREMENT,
  `tema` varchar(50) NOT NULL,
  `file` varchar(40) NOT NULL,
  `link` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rest`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rest`
--


-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id_student` int(11) NOT NULL AUTO_INCREMENT,
  `nick_name` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `cont_icq` varchar(12) DEFAULT NULL,
  `cont_vk` varchar(12) DEFAULT NULL,
  `cont_odn` varchar(12) DEFAULT NULL,
  `cont_skype` varchar(15) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `vuz` varchar(100) DEFAULT NULL,
  `banned` datetime DEFAULT NULL,
  `date_registration` datetime NOT NULL,
  `date_last` datetime NOT NULL,
  `id_partner` int(11) NOT NULL,
  `linking` tinyint(4) NOT NULL,
  `ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id_student`),
  UNIQUE KEY `id_student` (`id_student`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id_student`, `nick_name`, `password`, `cont_icq`, `cont_vk`, `cont_odn`, `cont_skype`, `city`, `vuz`, `banned`, `date_registration`, `date_last`, `id_partner`, `linking`, `ip`) VALUES
(8, 'mergenpurgen', 'b8cb1bbee17997b15f34384f100411793e8d2f36d0656039bbe982baf6dbde60', '', '', '', '', '', '', NULL, '2013-01-28 01:35:57', '2013-02-02 16:44:28', 0, 0, ''),
(7, 'stud1', 'aceff7c85e5ac23e5065b236dc476f7d4fe3f367018ee68b52ee8593d66a2e02', '12', '12', '12', '12', '12', '12', NULL, '2013-01-26 03:28:29', '2013-01-29 15:33:33', 2, 0, ''),
(9, 'studd', 'aceff7c85e5ac23e5065b236dc476f7d4fe3f367018ee68b52ee8593d66a2e02', '', '', '', '', '', '', NULL, '2013-02-01 20:33:48', '2013-02-01 20:33:48', 2, 1, '127.0.0.1'),
(10, 's1', 'aceff7c85e5ac23e5065b236dc476f7d4fe3f367018ee68b52ee8593d66a2e02', '12', '11', '111', '121', '211', '112', NULL, '2013-02-02 16:21:36', '2013-02-02 16:21:52', 0, 2, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `uniquehits`
--

CREATE TABLE IF NOT EXISTS `uniquehits` (
  `ip` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `ref` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `uniquehits`
--

INSERT INTO `uniquehits` (`ip`, `date`, `ref`) VALUES
('127.0.0.1', '2013-02-02', '');

-- --------------------------------------------------------

--
-- Table structure for table `zakaz`
--

CREATE TABLE IF NOT EXISTS `zakaz` (
  `id_zakaz` int(11) NOT NULL AUTO_INCREMENT,
  `id_student` int(11) NOT NULL,
  `type_work` tinyint(3) unsigned NOT NULL,
  `predmet` varchar(20) NOT NULL,
  `id_avtor` int(11) NOT NULL,
  `tema` varchar(30) NOT NULL,
  `v_ot` smallint(11) unsigned NOT NULL,
  `v_do` smallint(11) unsigned NOT NULL,
  `need_finished` date NOT NULL,
  `file_zadan` varchar(30) NOT NULL,
  `status` smallint(11) unsigned NOT NULL,
  `jaloba` varchar(50) NOT NULL,
  `file_otvet` varchar(30) NOT NULL,
  `time_finished` datetime NOT NULL,
  `time_zakaz` datetime NOT NULL,
  `time_oplata` datetime NOT NULL,
  `dop` varchar(250) NOT NULL,
  `time_vibor` datetime NOT NULL,
  `oplachen` tinyint(1) NOT NULL,
  `time_get` datetime NOT NULL,
  PRIMARY KEY (`id_zakaz`),
  UNIQUE KEY `id_zakaz` (`id_zakaz`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `zakaz`
--

INSERT INTO `zakaz` (`id_zakaz`, `id_student`, `type_work`, `predmet`, `id_avtor`, `tema`, `v_ot`, `v_do`, `need_finished`, `file_zadan`, `status`, `jaloba`, `file_otvet`, `time_finished`, `time_zakaz`, `time_oplata`, `dop`, `time_vibor`, `oplachen`, `time_get`) VALUES
(6, 7, 4, 'Р¤РёР»РѕСЃРѕС„РёСЏ', 4, 'Р¤СЂРµР№Рґ', 40, 60, '2013-01-31', './uploads/zadan/7edit.png', 10, '', './uploads/otvet/4left_menu.jpg', '2013-01-28 17:49:02', '2013-01-28 17:42:52', '0000-00-00 00:00:00', 'С„С‹РІС„С‹РІ', '2013-01-28 17:46:44', 1, '2013-01-28 18:10:00'),
(7, 7, 1, '1', 0, '1', 1, 1, '2013-01-30', '', 0, '', '', '0000-00-00 00:00:00', '2013-01-29 15:33:52', '0000-00-00 00:00:00', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(8, 7, 2, '2', 0, '2', 2, 2, '2013-01-31', '', 0, '', '', '0000-00-00 00:00:00', '2013-01-29 15:34:04', '0000-00-00 00:00:00', '2', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(9, 7, 3, '3', 0, '3', 3, 3, '2013-01-29', '', 0, '', '', '0000-00-00 00:00:00', '2013-01-29 15:34:17', '0000-00-00 00:00:00', '3', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `zp_zapros`
--

CREATE TABLE IF NOT EXISTS `zp_zapros` (
  `id_zapros` int(11) NOT NULL AUTO_INCREMENT,
  `type_client` tinyint(4) NOT NULL,
  `id_client` int(10) NOT NULL,
  `summa` int(11) NOT NULL,
  `time_zapros` datetime NOT NULL,
  `sposob` varchar(8) NOT NULL,
  `gotovo` datetime NOT NULL,
  PRIMARY KEY (`id_zapros`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `zp_zapros`
--

INSERT INTO `zp_zapros` (`id_zapros`, `type_client`, `id_client`, `summa`, `time_zapros`, `sposob`, `gotovo`) VALUES
(3, 2, 4, 5000, '2013-01-29 00:26:36', 'karta', '2013-01-29 01:12:35');
