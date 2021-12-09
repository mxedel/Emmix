-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2021 at 03:02 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Emmix`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `Username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Firstname` varchar(255) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Created` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `Username`, `Firstname`, `Lastname`, `Role`, `password`, `Created`) VALUES
(1, 'marc.edel94@gmail.com', 'mxedel', 'Marc', 'Edel', 'Owner', '12345', '2021-12-09 14:02:02.000000'),
(2, 'secondemail@gmail.com', 'rafa', 'Rafael', 'Nadsl', 'Admin', '54321', '2021-12-09 14:02:36.000000'),
(3, 'thirdemail@gmail.com', 'sabr', 'Roger', 'Federer', 'Author', '13542', '2021-12-09 14:02:36.000000'),
(651, 'fourthemail@gmail.com', 'Gordon', 'Gordon', 'Ramsay', 'Author', 'password', '2021-12-09 14:58:02.000000'),
(315, 'fourthemail@gmail.com', 'Gordon', 'Gordon', 'Ramsay', 'Author', 'password', '2021-12-09 14:58:30.000000'),
(293, 'fourthemail@gmail.com', 'Gordon', 'Gordon', 'Ramsay', 'Author', 'password', '2021-12-09 15:02:33.000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
