-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 07:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wafa_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(50) NOT NULL,
  `userpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `userpassword`) VALUES
('yusrabibi', 'yusra123'),
('yusrabibi', 'yusra123'),
('aimenkhan', 'aimen123'),
('yusrawazir', 'yusra123');

-- --------------------------------------------------------

--
-- Table structure for table `complain_form`
--

CREATE TABLE `complain_form` (
  `id` int(100) NOT NULL,
  `date_of_complain` varchar(200) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phonenumber` varchar(250) NOT NULL,
  `incident_date` varchar(250) NOT NULL,
  `incident_details` varchar(500) NOT NULL,
  `desired_outcomes` varchar(500) NOT NULL,
  `imageUpload` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain_form`
--

INSERT INTO `complain_form` (`id`, `date_of_complain`, `name`, `email`, `address`, `phonenumber`, `incident_date`, `incident_details`, `desired_outcomes`, `imageUpload`) VALUES
(1, '2020-06-05', 'yusra', 'yusra@gmail.com', 'islamabad', '', '2020-06-17', 'blue area', 'required solution', ''),
(2, '2020-06-05', 'yusra', 'yusra@gmail.com', 'islamabad', '', '2020-06-17', 'blue area', 'required solution', ''),
(3, '2020-06-12', 'yusra', 'yusra@gmail.com', 'islamabad', '', '2020-06-11', 'blue area', 'require solution', ''),
(4, '2020-06-16', 'yusra', 'yusra@gmail.com', 'islamabad', '0233354224', '2020-06-17', 'blue area', 'solution', ''),
(5, '2020-06-16', 'yusra', 'yusra@gmail.com', 'islamabad', '0233354224', '2020-06-17', 'blue area', 'solution', ''),
(6, '2020-06-20', 'yusra', 'yusra@gmail.com', 'islamabad', '0233354224', '2020-07-03', 'blue area', 'solution', ''),
(7, '2020-06-20', 'yusra', 'yusra@gmail.com', 'islamabad', '0233354224', '2020-07-03', 'blue area', 'solution', ''),
(8, '2020-06-17', 'yusra', 'yusra@gmail.com', 'islamabad', '0233354224', '2020-06-30', 'G7', 'road issues', ''),
(9, '2020-06-18', 'Aimen', 'aimen@gmail.com', 'blue area', '0233354224', '2020-06-23', 'G-7 sitara market . Due to damage road today 5 accidents occurs.', 'Please take action against this damage road', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(100) NOT NULL,
  `username` varchar(250) NOT NULL,
  `userpassword` varchar(250) NOT NULL,
  `phonenumber` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`id`, `username`, `userpassword`, `phonenumber`, `city`) VALUES
(1, 'ali', 'ali123', '0333877878', 'islamabad'),
(2, 'samreen', 'samreen123', '034696587521', 'Islamabad '),
(3, 'aimen khan', 'aimen125', '003786878987', 'islamabad'),
(4, 'aimen kashif2', 'aimen17', '979898434254', 'islamabad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain_form`
--
ALTER TABLE `complain_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain_form`
--
ALTER TABLE `complain_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
