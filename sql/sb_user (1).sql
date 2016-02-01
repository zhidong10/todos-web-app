-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 10 月 19 日 10:24
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `sb_user`
--

CREATE TABLE IF NOT EXISTS `sb_user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pwd` int(50) NOT NULL,
  `regtime` datetime NOT NULL,
  `param1` varchar(20) DEFAULT NULL,
  `param2` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `sb_user`
--

INSERT INTO `sb_user` (`id`, `email`, `username`, `pwd`, `regtime`, `param1`, `param2`) VALUES
(1, 'zhidong10@foxmail.com', NULL, 0, '2015-10-09 08:10:57', NULL, NULL),
(2, 'zhidong1@q.com', NULL, 2147483647, '2015-10-09 08:10:36', NULL, NULL),
(3, 'zhidong12@q.com', NULL, 2147483647, '2015-10-09 09:10:47', NULL, NULL),
(4, 'zhidonqg12@q.com', NULL, 2147483647, '2015-10-09 09:10:58', NULL, NULL),
(5, 'zhidonqgq12@q.com', NULL, 2147483647, '2015-10-09 09:10:30', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
