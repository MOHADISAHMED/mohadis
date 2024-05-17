-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 02:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mohadis1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Catid` int(11) NOT NULL,
  `CatName` varchar(255) NOT NULL,
  `Catimage` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Catid`, `CatName`, `Catimage`) VALUES
(1, 'peter', '23.png'),
(2, 'captainamerica', 'captainamerica.png'),
(6, 'tony stark', 'ce99c5039b1af071bf1a3d26326b512d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `productName` varchar(230) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDescription` varchar(255) NOT NULL,
  `productImage` varchar(230) NOT NULL,
  `productCatid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productName`, `productQuantity`, `productPrice`, `productDescription`, `productImage`, `productCatid`) VALUES
(5, 'peter parker', 1, 10000000, '0', '23.png', 1),
(7, 'captain america', 1, 100000, '0', 'b3852502392fb687c0c455933d9d3074.jpg', 2),
(8, 'stark', 1, 20987, 'sasdfa', 'b3852502392fb687c0c455933d9d3074.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userPassword` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userContact` int(11) NOT NULL,
  `userrole` varchar(230) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `userName`, `userPassword`, `userEmail`, `userContact`, `userrole`) VALUES
(2, 'Mohadis', 1234, 'mohadistanoli832@gmail.com', 214548, 'user'),
(3, 'Mohadis', 123456, 'Moha@LALA', 321456, 'user'),
(5, 'Mohadis', 123, 'mohadistanoli832@gmail.com', 0, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Catid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `productCatid` (`productCatid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`productCatid`) REFERENCES `categories` (`Catid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
