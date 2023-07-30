-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 09:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crimerep_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `crime_rep`
--

CREATE TABLE `crime_rep` (
  `Id` int(11) NOT NULL,
  `Crime_Done` varchar(30) NOT NULL,
  `Criminal_Name` varchar(40) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `VictimTestimonial_Name` varchar(40) NOT NULL,
  `State` varchar(15) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Officer_Incharge` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Evidence` varchar(30) NOT NULL,
  `Date_of_Register` datetime NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crime_rep`
--

INSERT INTO `crime_rep` (`Id`, `Crime_Done`, `Criminal_Name`, `Gender`, `VictimTestimonial_Name`, `State`, `Location`, `Officer_Incharge`, `Date`, `Description`, `Evidence`, `Date_of_Register`, `Status`) VALUES
(4, 'Accident', 'Rutuja Shingare', 'Female', 'Yash Shingare', 'Goa', 'Karul', 'Ninad Shingare', '2022-09-25', 'qwerty', '', '0000-00-00 00:00:00', 'Pending'),
(7, 'Robbery', 'Rutuja Shingare', 'Female', 'Yash Shingare', 'Delhi', 'Karul', 'Ninad Shingare', '2022-09-24', 'a', 'building3.jpg', '0000-00-00 00:00:00', 'Pending'),
(9, 'Abusement1', 'Rutuja Shingare1', 'Female1', 'abc1', 'Goa1', 'Oros1', 'Ninad Shingare1', '2022-11-08', 'lkj1', '', '0000-00-00 00:00:00', 'Pending'),
(10, 'Murder', 'himanshu', 'Male', 'Siddhesh Chavatekar', 'Maharashtra', 'Sukalvad', 'Ninad Shingare', '2022-11-01', 'Brutally Murdered.', '', '0000-00-00 00:00:00', 'Pending'),
(13, 'Robbery', 'asdfg', 'Female', 'himanshu lingayat', 'Delhi', 'Karul', 'Ninad Shingare1', '2022-11-09', 'abc', '', '0000-00-00 00:00:00', 'Ongoing'),
(15, 'Murder', 'Rutuja Shingare1', 'Female', 'Yash Shingare', 'Maharashtra', 'Karul', 'Ninad Shingare', '2022-11-09', 'abc', 'Screenshot (228).png', '0000-00-00 00:00:00', 'Action Made'),
(17, 'Murder', 'asdfg', 'Female', 'himanshu lingayat', 'Maharashtra', 'oros', 'Ninad Shingare', '2022-11-23', 'jik', 'Screenshot (110).png', '0000-00-00 00:00:00', 'Pending'),
(65, 'avd', 'c xz', 'zc z', 'zxc ', 'czv ', 'z ', 'z vcz', '2022-11-01', ' zvf zd', 'df d', '2022-11-10 18:20:05', 'Pending'),
(66, 'Murder', 'asdfg', 'Male', 'himanshu lingayat', 'Karnataka', 'Oros', 'Ninad Shingare', '2022-11-01', 'acx', '', '2022-11-10 18:27:02', 'Ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`) VALUES
(1, 'What is crime complaints resolving rate of india?', 'Approximately 75 %.'),
(2, 'admin', 'Very Poor'),
(3, 'Is there any system to verify fake case?', 'Yeah they are verified by the officers'),
(5, 'asahhj', 'asbdm,as.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `rating` varchar(15) NOT NULL,
  `feedback` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user`, `rating`, `feedback`) VALUES
(2, 'admin', 'Very Poor', 'aaaaaaaaa'),
(3, 'admin', 'Fair', 'Needs more Improvement.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact` int(12) NOT NULL,
  `state` varchar(15) NOT NULL,
  `regid` int(12) NOT NULL,
  `iddocname` varchar(35) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `uname`, `email`, `contact`, `state`, `regid`, `iddocname`, `password`) VALUES
(11, 'Yash Digambar S', 'yash', 'vash@gmail.com', 2147483647, 'Maharashtra', 12345, 'Screenshot (10).png', '1947'),
(12, 'Yash Digambar Shingare', 'kirito', 'nvshingare67@gmail.com', 12345678, 'Maharashtra', 1, 'img1.jpg', '2'),
(14, 'Ninad Vilas Shingare', 'ninad', 'nvshingare67@gmail.com', 1234568, 'Maharashtra', 1, 'Screenshot (37).png', '123'),
(35, 'Shingare', '1', 'nvshingare67@gmail.com', 2147483647, 'Maharashtra', 43251, 'rocket-ship-logoa.jpg', '202cb962ac59075b964b07152d234b70'),
(36, 'Ninad Vilas Shingare', 'admin', 'nvshingare67@gmail.com', 2147483647, 'Maharashtra', 1, 'letter-a-logo.jpg', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crime_rep`
--
ALTER TABLE `crime_rep`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
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
-- AUTO_INCREMENT for table `crime_rep`
--
ALTER TABLE `crime_rep`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
