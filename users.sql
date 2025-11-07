-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2025 at 04:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` bigint(20) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `datetime_local` datetime DEFAULT NULL,
  `time_input` time DEFAULT NULL,
  `month_input` varchar(7) DEFAULT NULL,
  `week_input` varchar(10) DEFAULT NULL,
  `color_input` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `hobbies` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `file_input` varchar(255) DEFAULT NULL,
  `range_input` int(11) DEFAULT NULL,
  `search_input` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `email`, `number`, `tel`, `url`, `date_of_birth`, `datetime_local`, `time_input`, `month_input`, `week_input`, `color_input`, `gender`, `hobbies`, `city`, `country`, `file_input`, `range_input`, `search_input`) VALUES
(2, 'abc', 'xyz', '$2y$10$45gRJ60DS9EfMQkYlHJal.eBvn1VbaQYBuhbdYTTb4xiisMnfwaiy', 'xyz@email.com', 1, '8790567485', 'https://xyz', '2025-11-07', '2025-11-07 08:12:00', '08:12:00', '2025-11', '2025-W46', '#1ed2bd', 'Female', 'Reading, Sports', 'Haveri', 'India', '1762483389_abcd.avif', 78, 'Cat'),
(3, 'NIvedita', 'P', '$2y$10$ECD4WGkl4Hpgx62pX2wkuOPfLwYxAE4hALdm2AUek2ftqaLHKDaHq', 'nivedita@gmail.com', 2, '98647534567', 'https://github', '2005-01-01', '2025-11-08 08:12:00', '08:12:00', '2025-11', '2025-W46', '#1ed2bd', 'Female', 'Sports, Music', 'Haveri', 'India', '1762483513_bg.jpg', 78, 'Dog'),
(4, 'Deekshita', 'A', '$2y$10$icC9OOHmBjnexY5CS1GE2OD6h/riAQVkA.YvxhKAdT6/G2ibkrb4q', 'deekshita@gmail.com', 3, '8758696467', 'https://google', '2004-08-12', '2025-11-10 08:12:00', '08:14:00', '2025-11', '2025-W46', '#88e811', 'Female', 'Sports, Music', 'Belagavi', 'India', '1762483636_tq.jpg', 68, 'Horse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
