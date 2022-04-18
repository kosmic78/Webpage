-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 04:41 PM
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
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `email`) VALUES
(1, 1271, 'asd', 'asd', 'asd'),
(8, 27860338634, 'kosmic', '123', 'cristian.gabor01@e-uvt.ro'),
(9, 2957487154, 'kosmic2', '123', 'cristian.gabor01@e-uvt.ro'),
(10, 2761900, 'kosmic3', '123', 'cristian.gabor01@e-uvt.ro'),
(11, 6055, 'kosmic4', 'asd', 'cristian.gabor01@e-uvt.ro'),
(12, 9223372036854775807, 'kosmic5', '123', 'cristian.gabor01@e-uvt.ro'),
(13, 9223372036854775807, 'kosmic6', 'asd', 'cristian.gabor01@e-uvt.ro'),
(14, 7639869511894978, 'kosmic7', 'asd', 'cristian.gabor01@e-uvt.ro'),
(15, 6568, 'kosmic8', '123', 'cristian.gabor01@e-uvt.ro'),
(16, 876879554911, 'kosmic9', 'asd', 'cristian.gabor01@e-uvt.ro'),
(17, 9374643875, 'kosmic10', '123', 'cristian.gabor01@e-uvt.ro'),
(18, 79560183703, 'kosmic11', '123', 'cristian.gabor01@e-uvt.ro'),
(19, 89382090932870, 'kosmic12', 'asd', 'cristian.gabor01@e-uvt.ro'),
(20, 8849071001813, 'kosmic13', 'asd', 'cristian.gabor01@e-uvt.ro'),
(21, 704068686513825638, 'kosmic14', 'asd', 'cristian.gabor01@e-uvt.ro'),
(22, 2474005413600955, 'kosmic15', 'asd', 'cristian.gabor01@e-uvt.ro'),
(23, 6203136, 'kosmic16', 'asd', 'cristian.gabor01@e-uvt.ro'),
(24, 5223051425174, 'kosmic17', '123', 'cristian.gabor01@e-uvt.ro'),
(25, 39926278, 'kosmic18', '123', 'cristian.gabor01@e-uvt.ro'),
(26, 142887016, 'kosmic19', '123', 'cristian.gabor01@e-uvt.ro'),
(27, 9917731563, 'kosmic20', '123', 'cristian.gabor01@e-uvt.ro'),
(28, 73299889736963386, 'kosmic21', '123', 'cristian.gabor01@e-uvt.ro'),
(29, 935264, 'kosmic22', '123', 'cristian.gabor01@e-uvt.ro'),
(30, 539400190, 'kosmic23', 'asd', 'cristian.gabor01@e-uvt.ro'),
(31, 9223372036854775807, 'kosmic24', '123', 'cristian.gabor01@e-uvt.ro'),
(32, 6255, 'kosmic25', '123', 'cristian.gabor01@e-uvt.ro'),
(33, 3860195105339214657, 'kosmic24', '123', 'cristian.gabor01@e-uvt.ro'),
(34, 2550475249833638407, 'kosmic25', '123', 'cristian.gabor01@e-uvt.ro'),
(35, 3575215955789769607, 'kosmic26', '123', 'cristian.gabor01@e-uvt.ro'),
(36, 2428, 'kosmic27', '123', 'cristian.gabor01@e-uvt.ro'),
(37, 251335286959, 'kosmic28', '123', 'cristian.gabor01@e-uvt.ro'),
(38, 9223372036854775807, 'kosmic29', '123', 'cristian.gabor01@e-uvt.ro'),
(39, 292530842253531298, 'kosmic30', '123', 'cristian.gabor01@e-uvt.ro'),
(41, 86330, 'kosmic31', '123', 'cristian.gabor01@e-uvt.ro'),
(42, 318276994, 'kosmic32', 'asd', 'cristian.gabor01@e-uvt.ro'),
(43, 8022, 'kosmic33', '123', 'cristian.gabor01@e-uvt.ro'),
(44, 1822362305475023862, 'kosmic34', 'asd', 'cristian.gabor01@e-uvt.ro'),
(45, 7039073224, 'kosmic35', '123', 'cristian.gabor01@e-uvt.ro'),
(46, 39946569546, 'kosmic36', '123', 'cristian.gabor01@e-uvt.ro'),
(47, 7238457135248, 'kosmic37', 'asd', 'cristian.gabor01@e-uvt.ro'),
(48, 84201331533, 'kosmic38', '123', 'cristian.gabor01@e-uvt.ro'),
(49, 3968649487, 'kosmic39', '123', 'cristian.gabor01@e-uvt.ro'),
(50, 90244, 'kosmic40', '123', 'cristian.gabor01@e-uvt.ro'),
(51, 490400, 'kosmic41', '123', 'cristian.gabor01@e-uvt.ro'),
(52, 5420556185644, 'kosmic42', '123', 'cristian.gabor01@e-uvt.ro'),
(53, 7348482786403480, 'kosmic43', '123', 'cristian.gabor01@e-uvt.ro'),
(54, 86566035666361720, 'kosmic44', '123', 'cristian.gabor01@e-uvt.ro'),
(55, 11694, 'kosmic45', '123', 'cristian.gabor01@e-uvt.ro'),
(56, 2741619750474, 'kosmic46', '123', 'cristian.gabor01@e-uvt.ro'),
(57, 5191787426561738, 'kosmic47', '123', 'cristian.gabor01@e-uvt.ro'),
(58, 9223372036854775807, 'kosmic48', '123', 'cristian.gabor01@e-uvt.ro'),
(59, 5040210, 'kosmic49', '123', 'cristian.gabor01@e-uvt.ro'),
(60, 4291903042742, 'kosmic50', '123', 'cristian.gabor01@e-uvt.ro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `password` (`password`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
