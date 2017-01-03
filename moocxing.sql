-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?01 �?02 �?17:14
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `moocxing`
--

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `cid` smallint(5) NOT NULL AUTO_INCREMENT,
  `cname` varchar(15) NOT NULL,
  `money` int(10) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  ` pid` int(15) NOT NULL AUTO_INCREMENT COMMENT '列表',
  `name` varchar(5) NOT NULL COMMENT '学生姓名',
  `sex` varchar(1) NOT NULL COMMENT '性别',
  `birthday` varchar(10) NOT NULL COMMENT '出生年月',
  `parentname` varchar(10) NOT NULL,
  `phone` int(11) NOT NULL COMMENT '电话',
  `adreess` varchar(30) NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (` pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='学生表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `pid` int(5) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(5) NOT NULL COMMENT '用户名',
  `userpw` varchar(20) NOT NULL COMMENT '密码',
  `moocid` int(20) NOT NULL COMMENT '慕客ID',
  `moocpm` tinyint(2) NOT NULL DEFAULT '0' COMMENT '慕客权限',
  PRIMARY KEY (`pid`),
  UNIQUE KEY `moocid` (`moocid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`pid`, `username`, `userpw`, `moocid`, `moocpm`) VALUES
(1, 'test', 'test', 2016, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
