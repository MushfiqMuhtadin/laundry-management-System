-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2022 at 09:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `quantity`) VALUES
(1, 'Iron', '3'),
(2, 'Shelf', '2'),
(4, 'Vaccum Cleaner', '2'),
(7, 'DRY WASHER', '2');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `list` varchar(100) NOT NULL,
  `I_title` varchar(100) NOT NULL,
  `I_description` varchar(100) NOT NULL,
  `I_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `username`, `list`, `I_title`, `I_description`, `I_image`) VALUES
(10, 'gfdkjlgdwfbgdfsdcfb dvfsdcfbvgdfsdfb gdfsdafdbvdsfda', 'fjkgdfsldasghftrewqergfrweqw', 'fjhkdfsdlasfgregfhgfgfrewq', 'fhfkdsldasnfgdabnghgfdfd', 'fhfjkdfsdlafgdfbnbfgfdsdas'),
(11, 'bndfsdanvndmd', 'hvjdksajvjck', 'bvfdjskvcn', 'bvndskdjcvchjx', 'vbfdsjkjvcj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `username` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `address` varchar(200) NOT NULL,
  `userpassword` varchar(22) NOT NULL,
  `confirmpassword` varchar(22) NOT NULL,
  `usertype` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `address`, `userpassword`, `confirmpassword`, `usertype`) VALUES
(76, 'Mushfiq', 'mushfiq1519@gmail.com', 'uttara', '12345', '12345', 'laundryman'),
(77, 'Nouroj', 'nouroj@gmail.com', 'uttaara', '12345', '12345', 'laundryman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
