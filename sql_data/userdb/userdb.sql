-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2019-12-23 05:55:28
-- 服务器版本: 5.6.14
-- PHP 版本: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES gb2312 */;

--
-- 数据库: `userdb`
--
CREATE DATABASE IF NOT EXISTS `userdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `userdb`;

-- --------------------------------------------------------

--
-- 表的结构 `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `location` varchar(50) NOT NULL,
  `id` bigint(20) unsigned NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `toName1` varchar(30) NOT NULL,
  `toName2` varchar(30) NOT NULL,
  `toName3` varchar(30) NOT NULL,
  `toName4` varchar(30) NOT NULL,
  `toName5` varchar(30) NOT NULL,
  `msg1` varchar(2000) NOT NULL,
  `msg2` varchar(2000) NOT NULL,
  `msg3` varchar(2000) NOT NULL,
  `msg4` varchar(2000) NOT NULL,
  `msg5` varchar(2000) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `login`
--

INSERT INTO `login` (`username`, `password`, `name`, `gender`, `age`, `location`, `id`, `email`, `mobile`, `isAdmin`, `toName1`, `toName2`, `toName3`, `toName4`, `toName5`, `msg1`, `msg2`, `msg3`, `msg4`, `msg5`) VALUES
('lilei', 'lilei', 'lilei', 0, 20, 'aeuTMae±"Y', 110101198802039473, 'lilei@bupt.edu.cn', '18787392837', 1, '', '', '', '', '', '', '', '', '', ''),
('admin', '000000', 'cZ<èfoe', 0, 21, 'a¤(c)ae'yen', 111000392019203021, 'wangsheng@163.com', '11122233322', 1, '', '', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
