-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2018 at 01:42 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topup_anservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `addimage`
--

DROP TABLE IF EXISTS `addimage`;
CREATE TABLE IF NOT EXISTS `addimage` (
  `addId` int(11) NOT NULL,
  `addImage` longblob NOT NULL,
  `imageNo` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`imageNo`,`addId`),
  UNIQUE KEY `imageNo` (`imageNo`),
  KEY `addId` (`addId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addmobileno`
--

DROP TABLE IF EXISTS `addmobileno`;
CREATE TABLE IF NOT EXISTS `addmobileno` (
  `useremail` varchar(100) NOT NULL,
  `addId` int(11) NOT NULL,
  `mobileNo` varchar(14) NOT NULL,
  PRIMARY KEY (`useremail`,`addId`,`mobileNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmobileno`
--

INSERT INTO `addmobileno` (`useremail`, `addId`, `mobileNo`) VALUES
('abdul@gmail.com', 25, '019191991'),
('abdul@gmail.com', 26, '019191991'),
('abdul@gmail.com', 27, '019191888'),
('abdul@gmail.com', 27, '019191991'),
('abdul@gmail.com', 28, 'rvevv'),
('abdul@gmail.com', 28, 'vervev'),
('abdul@gmail.com', 29, 'sdfdsf'),
('abdul@gmail.com', 29, 'sdfsdf'),
('abdul@gmail.com', 30, '54512313213216'),
('abdul@gmail.com', 31, '3123123'),
('abdul@gmail.com', 31, '4453123'),
('abdul@gmail.com', 32, '3123123'),
('abdul@gmail.com', 32, '4453123');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

DROP TABLE IF EXISTS `advertisement`;
CREATE TABLE IF NOT EXISTS `advertisement` (
  `useremail` varchar(100) NOT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `serviceCatagory` varchar(80) NOT NULL,
  `serviceField` text NOT NULL,
  `description` longtext,
  `district` varchar(60) NOT NULL,
  `area` varchar(60) NOT NULL,
  `address` varchar(90) NOT NULL,
  `postingTime` timestamp NULL DEFAULT NULL,
  `addTitle` varchar(100) NOT NULL,
  PRIMARY KEY (`useremail`,`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`useremail`, `Id`, `serviceCatagory`, `serviceField`, `description`, `district`, `area`, `address`, `postingTime`, `addTitle`) VALUES
('sumona@yahoo.com', 6, 'Tuition', 'HSC', 'zcCC', 'Sylhet', 'akhalia', 'adaDa', '2018-03-09 09:36:37', 'Dd'),
('sumona@yahoo.com', 7, 'Health', 'Medical, Mobility & Disability', 'zcCC', 'Chittagong', 'agrabad', 'adaDa', '2018-03-09 09:49:42', 'Dd'),
('sumona@yahoo.com', 8, 'Tuition', '  O & A Levels', 'asfaf', 'Dhaka', 'abdullahpur', 'asfasfa', '2018-03-09 09:51:34', 'zxsaxs'),
('sumona@yahoo.com', 9, 'Tuition', '  O & A Levels', 'zcCC', 'Sylhet', 'akhalia', 'adaDa', '2018-03-09 09:55:24', 'Dd'),
('abdul@gmail.com', 32, 'IT', '', 'sdfsdfsdfs', 'Dhaka', '', 'sdsfsdf', '2018-03-23 10:34:42', 'JavaScript'),
('abdul@gmail.com', 30, 'Tuition', '  O & A Levels', 'I am good at php muSQL', 'Dhaka', 'abdullahpur', 'B/311,khilgaon,taltola', '2018-03-23 05:47:16', 'web developer'),
('abdul@gmail.com', 31, 'IT', 'architect', 'sdfsdfsdfs', 'Dhaka', 'abdullahpur', 'sdsfsdf', '2018-03-23 10:34:23', 'JavaScript'),
('abdul@gmail.com', 29, 'IT', 'developer', 'sdfsf', 'Dhaka', 'abdullahpur', 'adasf', '2018-03-12 18:57:01', 'Php Developer');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `emailId` varchar(100) NOT NULL,
  `postingTime` date DEFAULT NULL,
  `uerPassword` varchar(800) DEFAULT NULL,
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(4) DEFAULT NULL,
  `proPic` varchar(500) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `firstName` varchar(60) DEFAULT NULL,
  `active` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`emailId`),
  UNIQUE KEY `emailId` (`emailId`),
  UNIQUE KEY `serial` (`serial`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`emailId`, `postingTime`, `uerPassword`, `serial`, `gender`, `proPic`, `lastName`, `firstName`, `active`) VALUES
('bokteir@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 11, 'male', 'image/edu.jpg', 'Abid', 'Bokteir', '0'),
('rifat@gmail.com', NULL, '0cc175b9c0f1b6a831c399e269772661', 3, 'male', 'image/10.jpg', 'Ahsan', 'Rifat', '0'),
('rifat.ahsan@icloud.com', NULL, '0cc175b9c0f1b6a831c399e269772661', 4, 'male', 'image/800px_COLOURBOX2513520 (1).jpg', 'aa', 'aa', '0'),
('aorko@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 5, 'male', 'image/26230067_1752000081501055_3193262311206924711_n.jpg', 'Dutta', 'Aorko', '0'),
('sumona@yahoo.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 6, 'male', 'image/terror.PNG', 'Hasan', 'Sumona', '0'),
('rahim@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 7, 'male', 'image/square-linkedin-512.png', 'alam', 'rahim', '0'),
('Trisha@hotmail.com', NULL, '$2y$10$MfmNZMysDFfWl4w5S43/sei.WOZCZ9pn4ST27nvzKOlziAcE4aaoO', 8, 'male', 'image/edu.jpg', 'Trisha', 'Sadia', '0'),
('Abid@sona.com', NULL, '$2y$10$.eg5KVAMZux1oZpmQBkkEO.CKMiz51ZeoUBYS1IssjSC7T7FeSzvC', 9, 'male', 'image/26230067_1752000081501055_3193262311206924711_n.jpg', 'Hasan', 'Abid', '0'),
('Abid@gmail.com', NULL, '$2y$10$64RFUR54rom8OhwYtD98/eQdTWUgv3Er.2zZrjfoOj2zREStNjep.', 10, 'male', 'image/26230067_1752000081501055_3193262311206924711_n.jpg', 'Hasan', 'Abid', '0'),
('eshan@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 12, 'male', 'image/26230067_1752000081501055_3193262311206924711_n.jpg', 'Dawan', 'Eshan', '0'),
('monik@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 13, 'male', 'image/IMG_1158.PNG', 'Barua', 'Monik', '0'),
('rfrr@hghr.com', NULL, '0cc175b9c0f1b6a831c399e269772661', 14, 'male', 'image/IMG_1153.JPG', 'rrfrr', 'rfrrf', '0'),
('rfrr@hhr.com', NULL, '03c7c0ace395d80182db07ae2c30f034', 15, 'male', 'image/IMG_1153.JPG', 'rrfrr', 'rfrrf', '0'),
('abdul@gmail.com', NULL, '0cc175b9c0f1b6a831c399e269772661', 16, 'male', 'image/IMG_1158.PNG', 'alam', 'Abdul', '0'),
('abdaul@gmail.com', NULL, '0cc175b9c0f1b6a831c399e269772661', 17, 'male', 'image/IMG_2817.PNG', 'alam', 'Abdul', '0'),
('abdqaul@gmail.com', NULL, '7694f4a66316e53c8cdd9d9954bd611d', 18, 'male', 'image/IMG_2817.PNG', 'alam', 'Abdul', '0'),
('abadqaul@gmail.com', NULL, '0cc175b9c0f1b6a831c399e269772661', 19, 'male', 'image/IMG_2817.PNG', 'alam', 'Abdul', '0'),
('abdula@gmail.com', NULL, '0cc175b9c0f1b6a831c399e269772661', 20, 'male', 'image/IMG_2817.PNG', 'alam', 'Abdul', '0'),
('zxczx@gmal.com', NULL, '0cc175b9c0f1b6a831c399e269772661', 21, 'male', 'image/10.jpg', 'scscz', 'sdas dvdv  dvdsv dsdbs', '0'),
('mahi@ogi.com', NULL, '0cc175b9c0f1b6a831c399e269772661', 22, 'male', 'image/351138380.jpg', 'Ma', 'Mahir', '0'),
('mahie@ogi.com', NULL, '0cc175b9c0f1b6a831c399e269772661', 23, 'male', 'image/769191373.jpg', 'Ma', 'Mahir', '0'),
('Alom@gmail.com', NULL, '0cc175b9c0f1b6a831c399e269772661', 24, 'male', 'image/100721783.png', 'Sorker', 'Alam', '0'),
('albi@gmail.com', NULL, '0cc175b9c0f1b6a831c399e269772661', 25, 'male', 'image/99238931.jpg', 'Rahman', 'Albi', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
