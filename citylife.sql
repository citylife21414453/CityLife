-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2019 at 03:20 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citylife`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(200) NOT NULL,
  `category_name` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Shops'),
(2, 'Restaurants'),
(3, 'Hospitals'),
(4, 'Events'),
(5, 'Fitness'),
(6, 'Hotels'),
(7, 'Puncture Repairs'),
(8, 'Mochi');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_message` varchar(400) NOT NULL,
  `user_name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user_email`, `user_message`, `user_name`) VALUES
(1, 'harshitapujary008@gmail.com', 'hhhhhhhhhhhhhhhhhhhhhhh', 'harshita'),
(2, 'harshitapujary008@gmail.com', 'wassup guys???', 'harshita');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `user_id` int(10) NOT NULL,
  `path` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`user_id`, `path`) VALUES
(15, 'a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `product_image` text NOT NULL,
  `product_title` text NOT NULL,
  `product_location` varchar(400) NOT NULL,
  `product_category` varchar(200) NOT NULL,
  `product_mobile` varchar(200) NOT NULL,
  `product_add` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `user_id`, `product_image`, `product_title`, `product_location`, `product_category`, `product_mobile`, `product_add`) VALUES
(2, 0, 'New Doc 2018-08-30 10.34.03_2 (2).jpg', 'jk ', 'jh', '3', '2567786787', ' jh'),
(3, 1, 'c26f21ee4b98efbf4e9f9fb443c6ad83.jpg', 'Dfsdg', 'sddgr', '4', '3134532212', 'sdfsd sdgs sdf'),
(4, 5, 'IMG_20180808_174121.jpg', 'Sartaj Music Classes', 'Pul Prahladpur', '4', '9958729503', 'Delhi'),
(5, 5, 'IMG_20180808_174121.jpg', 'Sartaj Music Classes', 'Pul Prahladpur', '4', '9958729503', 'Delhi'),
(6, 1, 'c26f21ee4b98efbf4e9f9fb443c6ad83.jpg', 'Dfsdg', 'sddgr', '4', '3134532212', 'sdfsd sdgs sdf'),
(8, 6, '27867344_1610030775712461_4783006942041228015_n.png', 'Poojary Shop', 'Hauz Khas', '5', '9555494654', 'Delhi'),
(9, 9, 'a.jpg', 'jgifulfjgh', 'kjgjlfuyf', '3', '5649432165', 'hjflfluyfulfv'),
(10, 9, 'a.jpg', 'jhgf', ',mvc', '2', '8130258522', 'kjhgffhgjk'),
(11, 9, 'a.jpg', 'Adal', 'ew hjgiug', '4', '5625325224', 'jhgutg'),
(12, 15, 'hs2.jpg', 'Fortis Hospital', 'Delhi', '3', '8130258522', 'Delhi-110016'),
(13, 15, 'hs1.jpg', 'A Hospital', 'Delhi', '3', '5649432165', 'Delhi-110016'),
(14, 15, 'rs5.png', 'Yasir Restro', 'Old Delhi', '2', '8130258522', 'Delhi-110016'),
(15, 16, 'h5.png', 'Yasir Hotel', 'Delhi', '6', '8130258522', 'Delhi-110016'),
(16, 15, 'a.jpg', 'Harshita', 'Search', '2', '5899494951', 'asdsff'),
(17, 15, 'a.jpg', ',njhhhh', 'Old Delhi', '6', '8130258522', 'Delhi-110016'),
(18, 15, 'a.jpg', 'vgcx', 'Old Delhi', '6', '8130258522', 'Delhi-110016');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(200) NOT NULL,
  `user_email` text NOT NULL,
  `user_name` varchar(400) NOT NULL,
  `user_password` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_name`, `user_password`) VALUES
(1, 'Abhijeet@gmail.com', 'Abhijeet', '1234'),
(2, 'kumar@gmail.com', 'Kumar', '1234'),
(3, 'gb@gmail.com', 'bjbda', '1234'),
(10, 'mallikrahul93@gmail.com', 'Rahul', '1234'),
(5, 'sartaj512@gmail.com', 'SartajHussain', '1234'),
(17, 'sppoojari@hotmail.com', 'sp', '4321'),
(16, 'Mdyasir033@gmail.com', 'Md Yasir', 'ac123ac'),
(8, 'badalbhusan@gmail.com', 'Badal Bhusan', '1234'),
(15, 'harshitapujary008@gmail.com', 'Harshita S Poojary', '4321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

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
  MODIFY `category_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
