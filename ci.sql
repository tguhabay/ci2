-- phpMyAdmin SQL Dump
-- version 2.10.0.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 15, 2011 at 08:10 AM
-- Server version: 5.0.37
-- PHP Version: 5.2.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `ci`
-- 
CREATE DATABASE `ci` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `ci`;

-- --------------------------------------------------------

-- 
-- Table structure for table `test1`
-- 

CREATE TABLE `test1` (
  `id` int(11) NOT NULL auto_increment,
  `text` varchar(250) NOT NULL,
  `dates` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

-- 
-- Dumping data for table `test1`
-- 

INSERT INTO `test1` VALUES (24, 'sq', '12-06-2011 03:19:02');
INSERT INTO `test1` VALUES (23, 'assss', '12-06-2011 03:18:59');
INSERT INTO `test1` VALUES (22, 'aw', '12-06-2011 03:18:55');
INSERT INTO `test1` VALUES (19, 'adasd', '12-06-2011 03:17:48');
INSERT INTO `test1` VALUES (20, 'aw', '12-06-2011 03:17:50');
INSERT INTO `test1` VALUES (21, 'aw', '12-06-2011 03:18:24');
INSERT INTO `test1` VALUES (25, '0', '13-06-2011 03:17:47');
INSERT INTO `test1` VALUES (26, 'test', '13-06-2011 03:18:00');
INSERT INTO `test1` VALUES (27, 'b', '13-06-2011 03:18:05');
INSERT INTO `test1` VALUES (28, 'b', '13-06-2011 03:30:24');
INSERT INTO `test1` VALUES (29, 'b', '13-06-2011 03:31:00');
INSERT INTO `test1` VALUES (30, 'b', '13-06-2011 03:32:00');
INSERT INTO `test1` VALUES (31, '0', '14-06-2011 07:19:40');
INSERT INTO `test1` VALUES (32, '0', '14-06-2011 08:27:06');
INSERT INTO `test1` VALUES (33, '0', '14-06-2011 08:30:13');
INSERT INTO `test1` VALUES (34, '0', '14-06-2011 08:30:44');
INSERT INTO `test1` VALUES (35, '0', '14-06-2011 08:31:43');
INSERT INTO `test1` VALUES (36, 'a', '14-06-2011 08:31:48');
INSERT INTO `test1` VALUES (37, 'a', '14-06-2011 08:32:05');
INSERT INTO `test1` VALUES (38, '0', '14-06-2011 09:15:20');
INSERT INTO `test1` VALUES (39, 'b', '14-06-2011 09:15:43');
INSERT INTO `test1` VALUES (40, '0', '15-06-2011 07:29:00');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id` int(3) NOT NULL auto_increment,
  `username` varchar(15) collate latin1_general_ci NOT NULL,
  `password` text collate latin1_general_ci NOT NULL,
  `fullname` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (4, 'teguh', '0cc175b9c0f1b6a831c399e269772661', 'akbar');
INSERT INTO `user` VALUES (5, 'codeigniter', '0cc175b9c0f1b6a831c399e269772661', 'codeigniter');
