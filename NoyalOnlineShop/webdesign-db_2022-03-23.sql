-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2022 at 12:46 PM
-- Server version: 8.0.23
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdesign`
--

-- --------------------------------------------------------

--
-- Table structure for table `cloths`
--

CREATE TABLE `cloths` (
  `clothsId` int NOT NULL,
  `clothsName` varchar(14) DEFAULT NULL,
  `clothsImages` varchar(11) DEFAULT NULL,
  `clothPrice` double(5,2) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `categoryId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cloths`
--

INSERT INTO `cloths` (`clothsId`, `clothsName`, `clothsImages`, `clothPrice`, `details`, `categoryId`) VALUES
(1, 'White dress', 'dress1.jpg', 15.90, 'Color: white\r\nMade of pure cotton. Machine washable. Return policy up to 30 days. \r\nModel size: S', 1),
(2, 'Satin dress', 'dress2.jpg', 20.00, 'Color: Grey-green\r\nSatin dress, machine washable under conditions. Return policy up to 30 days\r\nModel size: XS', 1),
(3, 'Dress', 'dress3.jpg', 14.99, 'Color:Black\r\nA satin dress. Machine washable. Zara product. \r\nModel size: S', 1),
(4, 'Formal shirt', 'top1.jpg', 55.00, 'Color: sky blue\r\nMade of pure cotton. Formal Shirt. Machine washable.\r\nModel size : M', 2),
(5, 'Formal shirt', 'top2.jpg', 100.55, 'Color: white shirt and black coat\r\nMade of pure cotton. Formal Shirt and coat. Machine washable.\r\nModel size : L', 2),
(6, 'white T-shirt', 'top3.jpg', 100.55, 'Color: white T-shirt\r\nMade of polyster\r\nModel size : L', 2),
(7, 'summer dress', 'dress4.jpg', 34.98, 'Color: orange\r\nMade of polyster\r\nModel size : L', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userId` int NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userId`, `username`, `password`) VALUES
(2, 'noyal', '$2y$10$k.injMpxcPiwVuPo2AZ8jOHJCaP/WCVJ4ido/vVWyMM42VEs7Pt4q'),
(3, 'alan', '$2y$10$5xXldiTIooqwU9TqWj9xc.VTWq2tf6hVRRXuLi0OUk36uFbOJ1ROG'),
(4, 'alan', '$2y$10$WZyHCgA297g07Qq.ksPGnOzAFwkmmLIVjEEDWmotFMd/mPqIhr5LG'),
(7, 'alan', '$2y$10$btC7iILWXFZ09IiASJNvh.1E67AUbd/.qt6RO2dqc.AUbxpKAPVRa'),
(8, 'noyal', '$2y$10$8jTqx95AcrIi3hFnJBODoO0l0VVYsOgmBSGZ2dawg9jlk9UTIUN/q'),
(9, 'alan', '$2y$10$T4sV.VsMcRZCyqt1gQnZJeyhIi4YRrx4CrUhwDisUxpZrzScIF56u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cloths`
--
ALTER TABLE `cloths`
  ADD PRIMARY KEY (`clothsId`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cloths`
--
ALTER TABLE `cloths`
  MODIFY `clothsId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
