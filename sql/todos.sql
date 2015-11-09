-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 11 月 09 日 15:21
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `todos`
--

-- --------------------------------------------------------

--
-- 表的结构 `sb_login_log`
--

CREATE TABLE IF NOT EXISTS `sb_login_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL,
  `time` varchar(32) NOT NULL,
  `ip` varchar(64) NOT NULL,
  `param1` varchar(32) NOT NULL,
  `param2` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户登录日志表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sb_user`
--

CREATE TABLE IF NOT EXISTS `sb_user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) NOT NULL,
  `regtime` datetime NOT NULL,
  `param1` varchar(20) DEFAULT NULL,
  `param2` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `sb_user`
--

INSERT INTO `sb_user` (`id`, `email`, `username`, `pwd`, `regtime`, `param1`, `param2`) VALUES
(1, 'zhidong10@foxmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '2015-10-09 08:10:57', NULL, NULL),
(4, 'zhidong@q.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', '2015-10-21 03:10:11', NULL, NULL),
(5, 'zhidong21@changyou.com', NULL, 'e7d12b23044b4b0ee1823c9601adc74b', '2015-10-21 03:10:28', NULL, NULL),
(6, 'zhidong@ss.com', NULL, 'e7d12b23044b4b0ee1823c9601adc74b', '2015-10-24 09:10:40', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
