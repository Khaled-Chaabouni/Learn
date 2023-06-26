-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2021 at 12:14 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `submission_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`submission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`submission_id`, `firstname`, `lastname`, `country`, `text`) VALUES
(1, 'Khaled', 'Chaabouni', 'Tunisia', 'Hello world XD'),
(10, '0/Khaled', 'Chaabouni', 'Norway', 'Hey I just wanna say that youre an amazing person keep being so awesome love uuu'),
(11, '0/Khaled', 'Chaabouni', 'Tunisia', 'Hi how r u'),
(12, '0/Khaled', 'Chaabouni', 'Tonga', 'Bonjour par exemple'),
(13, '1/KHaled', 'cHAABouni', 'Algeria', 'Bonjouuuur'),
(14, '0/Khaled', 'Chaabouni', 'Tunisia', 'teeeeeest'),
(15, '51/Khaled', 'Chaabouni', 'Tunisia', 'Bon travail LOL HAHAHA MDR LOL HAHA'),
(16, '0/Khaled', 'Chaabouni', 'Tokelau', 'pqozegpoqkepohkzh');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `id_detail` int NOT NULL AUTO_INCREMENT,
  `id_purchase` int NOT NULL,
  `id_product` int NOT NULL,
  `price` int NOT NULL,
  `location` varchar(10) NOT NULL,
  PRIMARY KEY (`id_detail`),
  KEY `id_purchase` (`id_purchase`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id_detail`, `id_purchase`, `id_product`, `price`, `location`) VALUES
(15, 34, 1001, 350, 'Online'),
(16, 34, 1007, 250, 'Online'),
(17, 34, 1004, 425, 'Online'),
(18, 35, 1006, 350, 'Online'),
(19, 35, 1005, 700, 'Online'),
(20, 36, 1010, 500, 'Online'),
(21, 37, 1004, 425, 'Online'),
(22, 37, 1005, 700, 'Online'),
(23, 38, 1005, 700, 'Online'),
(24, 41, 1004, 425, 'Online'),
(25, 52, 1004, 425, 'Online'),
(26, 52, 1001, 350, 'Online'),
(27, 52, 1006, 350, 'Online'),
(28, 52, 1007, 250, 'Online'),
(29, 61, 1001, 350, 'Online'),
(30, 61, 1005, 700, 'Online'),
(31, 62, 1004, 425, 'Online'),
(32, 62, 1005, 700, 'Online'),
(33, 63, 1005, 700, 'Online'),
(34, 63, 1004, 425, 'Online'),
(35, 63, 1001, 350, 'Online'),
(36, 64, 1004, 425, 'Online'),
(37, 64, 1001, 350, 'Online'),
(38, 68, 1004, 425, 'Online'),
(39, 68, 1005, 700, 'Online'),
(40, 69, 1001, 350, 'Online'),
(41, 69, 1004, 425, 'Online'),
(42, 69, 1009, 625, 'Online'),
(43, 70, 1001, 350, 'Online'),
(44, 70, 1002, 250, 'Online'),
(45, 71, 1002, 250, 'Online'),
(46, 72, 1002, 250, 'Office'),
(49, 73, 1002, 250, 'Office'),
(50, 73, 1001, 350, 'Office'),
(51, 74, 1002, 250, 'Office'),
(52, 74, 1003, 400, 'Online'),
(53, 75, 1002, 250, 'Office'),
(54, 75, 1001, 350, 'Office'),
(55, 75, 1003, 400, 'Online'),
(56, 75, 1005, 700, 'Office');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id_product` int NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `duration` int NOT NULL DEFAULT '2',
  `location` enum('Online','Office') NOT NULL DEFAULT 'Online',
  `img_course` varchar(30) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `price`, `name`, `duration`, `location`, `img_course`, `deleted`) VALUES
(1001, '350', 'Adobe Photoshop Course', 5, 'Office', 'PS.png', 0),
(1002, '250', 'pHp Course', 8, 'Office', 'PHP.png', 0),
(1003, '400', 'Javascript Course', 1, 'Online', 'JS.png', 0),
(1004, '425', 'Adobe After Effect Course', 6, 'Office', 'AE.jpg', 0),
(1005, '700', 'C# Course', 9, 'Office', 'C#.png', 0),
(1006, '350', 'SQL Course', 4, 'Online', 'SQL.png', 0),
(1007, '250', 'React Course', 8, 'Online', 'React.jpg', 0),
(1008, '125', 'Java Course', 6, 'Office', 'Java.jpg', 0),
(1009, '625', 'Adobe Illustrator Course', 4, 'Online', 'AI.png', 0),
(1010, '500', 'Android Course', 2, 'Online', 'AS.png', 0),
(1011, '275', 'C++ Course', 7, 'Online', 'C++.jfif', 0),
(1012, '425', 'Python Course', 12, 'Online', 'Python.jpg', 0),
(1234, '100', 'Chess', 2, 'Office', 'Chess.gif', 1),
(1555, '555', '55', 5, '', 'recognition.gif', 1),
(5555, '100', 'ai formation', 4, 'Office', 'AI.gif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

DROP TABLE IF EXISTS `purchases`;
CREATE TABLE IF NOT EXISTS `purchases` (
  `id_purchase` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `creationdate` date NOT NULL,
  `purchasestatus` enum('Validated','Progressing','Refused') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cost` int NOT NULL,
  `payed` int NOT NULL,
  PRIMARY KEY (`id_purchase`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id_purchase`, `id_user`, `creationdate`, `purchasestatus`, `cost`, `payed`) VALUES
(34, 1, '2021-05-05', '', 1025, 0),
(35, 1, '2021-05-05', '', 1050, 0),
(36, 1, '2021-05-05', '', 500, 0),
(37, 1, '2021-05-05', '', 1125, 0),
(38, 1, '2021-05-05', '', 700, 0),
(39, 1, '2021-05-05', '', 700, 0),
(40, 1, '2021-05-05', '', 700, 0),
(41, 1, '2021-05-05', '', 425, 0),
(42, 1, '2021-05-05', '', 425, 0),
(43, 1, '2021-05-05', '', 425, 0),
(44, 1, '2021-05-05', '', 425, 0),
(45, 1, '2021-05-05', '', 425, 0),
(46, 1, '2021-05-05', '', 425, 0),
(47, 1, '2021-05-05', '', 425, 0),
(48, 1, '2021-05-05', '', 425, 0),
(49, 1, '2021-05-05', '', 425, 0),
(50, 1, '2021-05-05', '', 425, 0),
(51, 1, '2021-05-05', '', 425, 0),
(52, 1, '2021-05-05', '', 1375, 0),
(53, 1, '2021-05-05', '', 1375, 0),
(54, 1, '2021-05-05', '', 1375, 0),
(55, 1, '2021-05-05', '', 1375, 0),
(56, 1, '2021-05-05', '', 1375, 0),
(57, 1, '2021-05-05', '', 1375, 0),
(58, 1, '2021-05-05', '', 1375, 0),
(59, 1, '2021-05-05', '', 1375, 0),
(60, 1, '2021-05-05', '', 1375, 0),
(61, 1, '2021-05-06', '', 1050, 0),
(62, 103, '2021-05-07', '', 1125, 0),
(63, 1, '2021-05-08', '', 1475, 0),
(64, 1, '2021-05-08', '', 775, 0),
(65, 1, '2021-05-08', '', 775, 1),
(66, 1, '2021-05-08', '', 775, 1),
(67, 1, '2021-05-08', '', 775, 1),
(68, 1, '2021-05-08', '', 1125, 1),
(69, 1, '2021-05-08', '', 1400, 1),
(70, 1, '2021-05-09', '', 600, 1),
(71, 1, '2021-05-09', '', 250, 1),
(72, 1, '2021-05-10', '', 250, 1),
(73, 1, '2021-05-10', '', 600, 1),
(74, 1, '2021-05-10', '', 650, 1),
(75, 1, '2021-05-16', '', 1700, 1);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

DROP TABLE IF EXISTS `registrations`;
CREATE TABLE IF NOT EXISTS `registrations` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `number` bigint NOT NULL,
  `birthday` date NOT NULL,
  `gender` enum('male','female') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'usericon.png',
  `administrator` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id_user`, `firstname`, `lastname`, `email`, `password`, `number`, `birthday`, `gender`, `img`, `administrator`) VALUES
(1, 'Khaled', 'Chaabouni', 'Chaabounikhaled@yahoo.fr', '123456', 25981219, '1998-12-19', 'male', 'sus.jpg', 0),
(2, 'UPYP', '1998', 'u1p9y9p8@yahoo.com', 'maj2021', 123456, '1900-01-01', 'male', 'usericon.png', 1),
(50, 'Snow', 'Chaabouni', 'Snow@snow.sn', '123456789', 25981219, '2021-04-28', 'female', 'usericon.png', 0),
(51, 'Khaled', 'Chaabouni', 'khaled.chaabouni@etudiant-isi.utm.tn', '123456', 25981219, '2021-04-22', 'male', 'onfire.gif', 1),
(97, 'Username', 'Lastname', 'Chaabounikhaled@gmail.com', 'Chaabouni111KH928', 25981219, '1998-12-19', 'male', 'usericon.png', 0),
(99, 'Iheb', 'Chaabouni', 'ihebc2000@yahoo.fr', 'ihebc2000', 25510816, '2021-04-29', 'male', 'maria-poliakova-05.jpg', 0),
(103, 'Test', 'Testing', 'Testing@something.ts', 'Testing', 25981219, '1998-12-19', 'male', 'WallDrawing.jpg', 0),
(105, 'abcde', 'defg', 'hijklmn@opq.rs', 'tuvwxyz', 123456789, '5678-12-31', 'male', 'onfire.gif', 0),
(106, 'Test', 'Test', 'Testing@something.tst', '123456', 12345678, '2021-05-05', 'male', 'AI.gif', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`id_purchase`) REFERENCES `purchases` (`id_purchase`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `details_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
