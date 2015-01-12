-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014-12-15 16:14:01
-- 服务器版本： 5.00.15
-- PHP Version: 5.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `findjob`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Name` varchar(11) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`Name`, `Password`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 表的结构 `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `ID` int(6) unsigned NOT NULL auto_increment,
  `NickName` varchar(20) NOT NULL,
  `HeadPic` text NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `Major` varchar(50) NOT NULL,
  `Year` year(4) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Oneword` text NOT NULL,
  `QQ` varchar(15) NOT NULL,
  `WeChat` varchar(20) NOT NULL,
  `Tel` varchar(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Good` int(10) unsigned NOT NULL default '0',
  `FakeClick` int(10) unsigned NOT NULL default '0',
  `Suggest` text NOT NULL,
  `Share` text NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `person`
--

INSERT INTO `person` (`ID`, `NickName`, `HeadPic`, `Dept`, `Major`, `Year`, `Degree`, `Company`, `Position`, `Address`, `Oneword`, `QQ`, `WeChat`, `Tel`, `Email`, `Good`, `FakeClick`, `Suggest`, `Share`) VALUES
(1, 'wulv', 'image/head/wulv.jpg', '管理', '信管', 2012, '本科', '华为', '前端', '南京', '就是这么任性', '543885224', 'wulv1993', '13170273187', '543885224@qq.com', 24, 113, '没有', '没有'),
(2, '2', '14186594024.jpg', 'guanli', '信管', 2121, '非人防', '的', '得到', '额风格', '侧反反复复', '12334', '123', '1234', '123445', 0, 0, '<h5><font style="background-color: rgb(102, 102, 0);">建议呜呜呜呜呜呜</font></h5>', '<h5>分享11111111111111111</h5>'),
(4, '12', '1418643774xiaohui.png', 'guanli', '信管', 2121, '非人防', '的', '得到', '额风格', '侧反反复复', '12334', '123', '1234', '123445', 0, 0, '<h5><font style="background-color: rgb(102, 102, 0);">建议呜呜呜呜呜呜</font></h5>', '<h5>分享11111111111111111</h5>'),
(5, '12', '14186438983.jpg', 'guanli', '信管', 2121, '非人防', '的', '得到', '额风格', '侧反反复复', '12334', '123', '1234', '123445', 0, 0, '<h5><font style="background-color: rgb(102, 102, 0);">建议呜呜呜呜呜呜</font></h5>', '<h5>分享11111111111111111</h5>'),
(6, '6', '14186589997.jpg', 'guanli', '信管', 2121, '非人防', '的', '得到', '额风格', '侧反反复复', '12334', '123', '1234', '123445', 0, 0, '<h5><font style="background-color: rgb(102, 102, 0);">建议呜呜呜呜呜呜</font></h5>', '<h5>分享11111111111111111</h5>'),
(7, '非人防434343', '1418644640hfut.png', 'guav', '信管', 2121, '非人防 v', '的反反复复', '得到飞 ', '额风格 飞', '侧反反复复反复反复或', '12334', '123', '1234', '123445', 0, 0, '<h5><font style="background-color: rgb(102, 102, 0);">建议呜呜呜呜呜呜</font></h5>', '<h5>分享11111111111111111</h5>'),
(8, '非人防434343', '14186447571.jpg', 'guav', '信管', 2121, '非人防 v', '的反反复复', '得到飞 ', '额风格 飞', '侧反反复复反复反复或', '12334', '123', '1234', '123445', 0, 0, '<h5><font style="background-color: rgb(102, 102, 0);">建议呜呜呜呜呜呜</font></h5>', '<h5>分享11111111111111111</h5>'),
(9, '非人防434343', 'default.jpg', 'guav', '信管', 2121, '非人防 v', '的反反复复', '得到飞 ', '额风格 飞', '侧反反复复反复反复或', '12334', '123', '1234', '123445', 0, 0, '<h5><font style="background-color: rgb(102, 102, 0);">建议呜呜呜呜呜呜</font></h5>', '<h5>分享11111111111111111</h5>'),
(10, '天语言语言', '14186598931.jpg', '3232', '223', 2014, '32', '323', '232', '32', '323', '323', '32', '32', '232', 0, 0, '建议2332', '分享32332');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
