-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2019 at 08:04 AM
-- Server version: 5.5.14
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
-- Database: `collegelist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `Username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

DROP TABLE IF EXISTS `college`;
CREATE TABLE IF NOT EXISTS `college` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `college_name` varchar(100) NOT NULL,
  `District` varchar(50) NOT NULL,
  `University` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `weblink` varchar(100) NOT NULL,
  `university_link` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `college_name` (`college_name`),
  UNIQUE KEY `weblink` (`weblink`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `phone` (`phone`) USING BTREE,
  UNIQUE KEY `email` (`email`) USING BTREE,
  KEY `District` (`District`) USING BTREE,
  KEY `university_link` (`university_link`) USING BTREE,
  KEY `University` (`University`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `college_name`, `District`, `University`, `phone`, `email`, `weblink`, `university_link`, `Password`) VALUES
(2, 'Lissah collge', 'Kozhikode', 'University of Kerala', '111', 'mail.lissah@gmail.com', 'www.ccs.com', 'www.cu.com', '123'),
(3, 'Christian College', 'Kozhikode', 'University of Calicut', '789654', 'christ@gmail.com', 'malabar.com', 'www.cu.com', '456'),
(5, 'qqqwwww', 'Kozhikode', 'University of Calicut', '111121', 'qqqw@gmail.com', 'qqqw.com', 'qw.com', 'www');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'murshid', 'sdf@sdf.com', 'sgdhtfg', 'dfghjmhgdhcnbhnccnxgbgfbc dhsg dfh stte hest hesth th 3hsrt hstrj rstj rttjr tjrtjsrtj'),
(2, 'dffh', 'fghj@sdfh.com', 'fdfh', 'dgnxgfnfhmghhjfthhjft'),
(3, 'murshid', 'murshidarkzz@gmail.com', 'dvzdf', 'sFAgdhfjhgfghdjgfdfghjhgfdfgxv'),
(4, 'xfgj', 'murshidarkzz@gmail.com', 'cfgjthj', 'zsdfjdyhjdyj'),
(5, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `college_name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `college_name`, `course`) VALUES
(1, 'Lissah collge', 'BA'),
(2, 'Lissah collge', 'BSC'),
(3, 'Lissah collge', 'BCOM'),
(9, 'Lissah collge', 'MSC'),
(10, 'Christian College', 'MA'),
(11, 'Christian College', 'MSC'),
(12, 'Christian College', 'MCOM'),
(13, 'qqq', 'BA'),
(14, 'qqq', 'BSC'),
(15, 'qqqwwww', 'BSC'),
(16, 'qqqwwww', 'BCOM');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
