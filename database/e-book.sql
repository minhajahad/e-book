-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 03:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(5) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(8) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` char(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `uname` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pass` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `email`, `uname`, `pass`, `image`) VALUES
('Asifur Rahman', 'asifr123@gmail.com', 'asif123', '123456', '590cea777c3051a2fcdd15e90954cbf8.jpg'),
('Karim Sheikh', 'ks@gmail.com', 'ksheikh', '123456', 'c95fbdd98927aeefd2d857c9bc86bdb0.jpeg'),
('Minhaj', 'mnhj@gmail.com', 'mnhj13', '123456', 'c95fbdd98927aeefd2d857c9bc86bdb0.'),
('Rashed', 'rsh@gmail.com', 'rh', '123456', 'c95fbdd98927aeefd2d857c9bc86bdb0.');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `uname` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `order_date` varchar(14) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(2) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `uname`, `order_date`, `status`) VALUES
('O - 224', 'ksheikh', '2022/04/10', '1'),
('O - 289', 'asif123', '2022/04/10', '0'),
('O - 325', 'asif123', '2022/04/08', '0'),
('O - 379', 'mnhj13', '2022/04/08', '0'),
('O - 476', 'asif123', '2022/04/08', '1'),
('O - 486', 'mnhj13', '2022/04/09', '0');

-- --------------------------------------------------------

--
-- Table structure for table `orderline`
--

CREATE TABLE `orderline` (
  `order_id` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `bookid` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quantity` int(3) NOT NULL,
  `total` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `orderline`
--

INSERT INTO `orderline` (`order_id`, `bookid`, `quantity`, `total`) VALUES
('O - 379', 'b-1', 2, 900),
('O - 476', 'b-2', 1, 2450),
('O - 325', 'b-3', 1, 350),
('O - 486', 'b-1', 2, 900),
('O - 289', 'b-2', 2, 4900),
('O - 224', 'b-3', 1, 350);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `bookid` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `booktype` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `writername` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `bprice` int(5) NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`bookid`, `name`, `booktype`, `writername`, `bprice`, `image`) VALUES
('b-1', 'Destiny Disrupted: A History of the World Through Islamic Eyes', 'Historical fiction', 'Tamim Ansary', 350, 'e0752e0df84aa3f62cb10737c86cbdcf.jpg'),
('b-2', 'Mindset', 'Others', 'Dr Carol S Dweck', 2000, 'b8961f440333452ad6b25336be8902a7.jpeg'),
('b-3', 'Road to success', 'Others', 'Napoleon Hill', 220, 'd59eec7e46a4629be572e74702f549c1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `bookid` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sellingprice` int(5) NOT NULL,
  `quantity` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`bookid`, `sellingprice`, `quantity`) VALUES
('b-1', 450, 7),
('b-2', 2450, 4),
('b-3', 350, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orderline`
--
ALTER TABLE `orderline`
  ADD KEY `orderline_ibfk_1` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`bookid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderline`
--
ALTER TABLE `orderline`
  ADD CONSTRAINT `orderline_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `customer_order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
