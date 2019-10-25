-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 07:01 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lr`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `Customer Name` varchar(10) NOT NULL,
  `Contact No` varchar(20) NOT NULL,
  `CIty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_contact`
--

CREATE TABLE `db_contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_contact`
--

INSERT INTO `db_contact` (`name`, `email`, `subject`, `message`, `id`) VALUES
('Rasel', 'Rasel@gmail.com', 'hello...', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, quae. Rerum culpa asperiores explicabo, neque accusantium illum officia deleniti consectetur repudiandae, ipsum voluptas, sed repellendus, veniam autem unde quo in!', 1),
('Samira', 'Samira@gmail.com', 'Food', 'consectetur adipisicin...', 2);

-- --------------------------------------------------------

--
-- Table structure for table `db_reservation`
--

CREATE TABLE `db_reservation` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `datepicker` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `guest` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_reservation`
--

INSERT INTO `db_reservation` (`id`, `first_name`, `last_name`, `state`, `datepicker`, `phone`, `guest`, `email`, `time`) VALUES
(1, 'Md.Rasel', 'Hossain', 'Dhaka', '2018-01-02', '1914671109', '15', 'raselhossain120@gmail.com', '13:00:00'),
(2, 'Rasel', 'Hos', 'Rajshai', '2018-01-03', '1914671109', '5', 'Rasel@gmail.com', '15:00:00'),
(3, 'Fatmi', 'Tohra', 'Dinajpur', '2018-01-05', '123456789', '15', 'Fatmi@gmail.com', '00:00:01'),
(4, 'Samira Yeasmin', 'Yeasmin', 'Dhaka', '2018-02-05', '123456789', '25', 'Samira@gmail.com', '00:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'MD.Rasel Hossain', 'Rasel', 'raselhossain120@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Samira', 'Samira', 'Samira@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Fatmi Oubaidute', 'Fatmi', 'FatmiOubaidute@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `db_contact`
--
ALTER TABLE `db_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_reservation`
--
ALTER TABLE `db_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `db_contact`
--
ALTER TABLE `db_contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `db_reservation`
--
ALTER TABLE `db_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
