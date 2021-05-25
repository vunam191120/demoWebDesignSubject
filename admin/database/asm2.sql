-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2020 at 02:28 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `asm2`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--
CREATE DATABASE asm2;
USE asm2;

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`) VALUES
(1, 'shirt'),
(2, 'shoes'),
(3, 'skirt'),
(4, 'hat'),
(5, 'earring'),
(6, 'bag'),
(9, 'coat'),
(10, 'jacket');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productImage` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `productAvailable` int(11) NOT NULL,
  `categoryID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productImage`, `price`, `brand`, `productAvailable`, `categoryID`) VALUES
(1, 'Silk Viscose Faille Maxi Shirt', 'product1.jpeg', 4999, 'GUCCI', 10, 1),
(2, 'Women\'s Leather Ballet Flat with Horsebit', 'product2.jpg', 3999, 'GUCCI', 23, 2),
(3, 'Cotton Viscose Faille Skirt with Side Slits', 'product3.jpg', 2333, 'GUCCI', 22, 3),
(4, 'Cotton Hat with Interlocking G', 'product4.jpg', 899, 'GUCCI', 8, 4),
(5, 'GG Running Gold Single Earring', 'product5.jpg', 600, 'GUCCI', 40, 5),
(6, 'Dionysus snakeskin top handle bag', 'product6.jpg', 8999, 'GUCCI', 4, 6),
(9, 'Cotton skirt with Gucci label', 'product7.jpg', 4321, 'GUCCI', 4, 3),
(10, 'GG Running gold single earring', 'productupdate10_12.jpg', 2342, 'GUCCI', 12, 5),
(12, 'Double-breasted wool coat', 'productupdate12_23.jpg', 2333, 'GUCCI', 23, 9),
(13, 'GG linen jacket', 'product_23.jpg', 8938, 'GUCCI', 23, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rule` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `rule`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`);
