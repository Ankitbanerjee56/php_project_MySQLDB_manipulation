-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 05:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqltut`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentrecord`
--

CREATE TABLE `studentrecord` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `marks` varchar(50) NOT NULL,
  `city` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentrecord`
--

INSERT INTO `studentrecord` (`id`, `name`, `marks`, `city`) VALUES
(1, 'Ankit', '90', 'Kolkata'),
(3, 'Ankit', '90', 'Kolkata'),
(5, 'Ankit', '90', 'Kolkata'),
(6, 'wahab', '90', 'Kolkata'),
(7, 'Ankit', '90', 'Kolkata'),
(13, 'Sodna Akash', '475', 'Bhadrapara'),
(14, 'Anshuman', '475', 'Chennai'),
(15, 'Somir', '346', 'jyoti'),
(16, 'Sumit', '57', 'Bandel'),
(17, 'Sumit', '60', 'Bandel'),
(18, 'Sunita', '67', 'Dumdum'),
(19, 'Suchitra Biswas', '45', 'Behala'),
(20, 'Rounak', '17', 'Bangalore'),
(21, 'Rahul', '60', 'Howrah'),
(22, 'Rohit', '36', 'Alipur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentrecord`
--
ALTER TABLE `studentrecord`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentrecord`
--
ALTER TABLE `studentrecord`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
