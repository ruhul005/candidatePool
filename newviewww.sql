-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2018 at 07:04 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newviewww`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `id` int(11) NOT NULL,
  `advertise_name` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`id`, `advertise_name`, `user_id`) VALUES
(2, 'how bd', 4),
(3, 'wow bd', 4),
(4, 'hfk', 4),
(5, 'gfdjs', 4),
(6, 'fdhasg', 4),
(7, 'fok', 4),
(8, 'how', 8),
(9, 'kdfk', 8),
(10, 'h', 8),
(11, 'hokl', 8),
(12, 'jcklds', 8),
(13, 'mow', 8),
(14, 'h', 7),
(15, 'hsiai', 4),
(16, 'dhasjk', 4),
(17, 'dnkas', 4),
(18, 'kol', 4),
(19, 'wow bd', 9),
(20, '50 $ per day', 10),
(21, '4$ A DAY', 11),
(22, 'i am Super man', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `cgpa` varchar(4) NOT NULL,
  `current_status` varchar(50) NOT NULL,
  `educational_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `image`, `firstname`, `lastname`, `username`, `email`, `password`, `phone`, `address`, `skill`, `cgpa`, `current_status`, `educational_status`) VALUES
(1, '6907050-fish-windows-7-wallpaper.jpg', 'joy', 'hossain', 'joy12', 'joy@gmail.com', '1234', 12345, '3983', '7313846', '3738', '864381964', 'ssc,hsc,higher'),
(3, 'diu.jpg', 'jok', 'kio', 'nayem', 'nayem@gmail.com', '1234', 12345, '', '0', '0', '', 'ssc,hsc,higher'),
(4, 'wallpaper_for_windows_7.jpg', 'joy', 'hossain', 'jot12', 'jot@gmail.com', '1234', 95423, '12374', '9231', '2391', 'djjd', 'hsc'),
(5, '', '', '', '', '', '', 0, '', '0', '0', '', ''),
(6, 'Koala.jpg', 'jok', 'hojj', 'sdjnv', 'djnvj@gmail.com', '12344', 3948938, '', '0', '0', '', ''),
(7, 'Koala.jpg', 'jok', 'hojj', 'sdjnvhj', 'djnvjhh@gmail.com', '12345', 3948938, '', '0', '0', '', ''),
(8, 'Desert.jpg', 'hot', 'pot', 'pot12', 'pot@gmail.com', '12345', 987665544, '', '0', '0', '', ''),
(9, 'Tulips.jpg', 'ert', 'rtt', 'rtt', 't@gmail.com', '1234', 12234454, '', '0', '0', '', ''),
(10, 'Advertise.png', 'Ruhul', 'Amin', 'rrrr', '123@gmail.com', '123456', 1234567890, '', '0', '0', '', ''),
(11, 'platform.jpg', 'KAMAL', 'SAIDI', 'SSS', '1234@gmail.com', '112233', 1243567, '', '', '', '', ''),
(12, '', 'ash', 'ilam', 'ruhulamin', '12345@gmail.com', '12345', 2345, 'dhaka', 'superman', '4.00', 'employeed', 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertise`
--
ALTER TABLE `advertise`
  ADD CONSTRAINT `advertise_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
