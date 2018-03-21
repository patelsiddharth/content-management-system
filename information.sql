-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2017 at 05:32 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(250) NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `contact` int(150) NOT NULL,
  `address` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `name`, `gender`, `contact`, `address`, `location`, `skill`, `category`) VALUES
(1, 'siddharth', 'male', 12342345, '2314 Myra Ave\r\nCalhoun City', 'jabalpur', 'yes skill', 'obc'),
(5, 'aman', 'male', 98776221, '0761 bhopal', 'bhopal', 'stud', 'obc'),
(6, 'siddhant', 'male', 7654216, '12435 mp', 'mumbai', 'bla bla', 'general'),
(7, 'alpha', 'male', 1235634534, '098 asfaf', 'delhi', 'idk', 'sc'),
(8, 'eshu', 'female', 3252345, '3534 dfs sgswgs', 'goa', 'qwerty', 'st'),
(9, 'yash', 'male', 124325235, '987 murica', 'murica', 'skill', 'gene'),
(10, 'MillieÂ SÂ Luczak', 'female', 870, '214 Harvey St, Williamson, WV, 25661', 'India', 'socializing', 'general'),
(11, 'Brenda M Smith', 'male', 0, '2607 Colebrooke Dr, Temple Hills, MD, 20748', 'America', 'mathematics', 'obc'),
(12, 'Wayne A Smith', 'male', 0, '215 Merrill Rd, Corinna, ME, 04928', 'Australia', 'woodcarving', 'sc'),
(13, 'Stella Johnson', 'female', 0, '506 Sr 467, Clovis, NM, 88101', 'In', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
