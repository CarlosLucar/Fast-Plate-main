-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 09:04 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `display` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` char(40) NOT NULL,
  `reg_date` datetime NOT NULL,
  `user_name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `display`, `email`, `password`, `reg_date`, `user_name`) VALUES
(1, 'John', 'john@beatles.com', '2a50435b0f512f60988db719106a258fb7e338ff', '2021-05-09 11:35:04', '123'),
(2, 'Ringo', 'ringo@beatles.com', '520f73691bcf89d508d923a2dbc8e6fa58efb522', '2021-05-09 11:35:04', '123'),
(3, '123', '123', '123', '2021-05-12 01:31:15', '123'),
(59, '1234', '1234', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2021-05-12 02:13:11', '123'),
(60, 'miguel', '1234', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2021-05-12 21:02:32', '123'),
(63, 'angel', '123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2021-05-16 09:31:18', '123'),
(64, 'liu', '123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2021-05-16 15:11:56', '123'),
(65, '123', '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2021-10-12 23:54:07', 'gfdgdfg'),
(66, '', 'fdsf', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2021-10-13 00:00:07', '123'),
(67, '', 'fdsf', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2021-10-13 01:28:42', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
