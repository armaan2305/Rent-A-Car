-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 08:52 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentacar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `carname` varchar(50) NOT NULL,
  `fromdate` varchar(100) NOT NULL,
  `todate` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `fullname`, `carname`, `fromdate`, `todate`, `message`) VALUES
(110, 'sf', '8', 'efwe', 'fsef', 'sefesf'),
(111, 'wef', '18', 'wef', 'wef', 'ef');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(10) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_type`, `image`, `cost`, `capacity`) VALUES
(5, 'Audi R8', 'Sports', 'audi1.jpg', '4000', '2'),
(7, 'BMW M5', 'Sedan', 'bmw1.jpg', '2000', '4'),
(8, 'Nissan', 'GTR', 'nissan4.jpg', '2500', '3'),
(9, 'Toyota', 'Sedan', 'toyota1.jpg', '1000', '5'),
(14, 'test', 'test', 'banner-image.jpg', '100', '4'),
(18, 'test1', 'test2', 'about_services_faq_bg.jpg', '11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(3, 'asdd', 'sdasdas', 'd23123123', '1dsdefaef'),
(4, 'me2', 'me@.', 'dde', 'hello'),
(5, 'qdd', 'wfwefwef', '1321231', 'hello'),
(31, 'ABC', 'abc@gmail.com', '1234567', 'hiii\r\n'),
(32, 'abc', 'asdasd', '1241414', 'adfaffa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(4, 'admin', '', 'demo@mail.com', '123'),
(5, 'demo', '', 'abc@gmail.com', '123'),
(6, 'xyz', '', 'xyz@xyz.com', '123'),
(7, '111', '', 'qwert@q.com', '123'),
(8, 'new', 'new@w.com', '123456', '123'),
(9, 'new', '1234567', 'qwer@as.com', '123'),
(10, 'name', '123456789', 'abz@abz.com', '123'),
(11, 'qwerty', '123', 'qwerty@mail.com', '1234'),
(12, 'heloo', '99988877666', 'gh@e.com', '123'),
(13, 'ameer', '99887766', 'amer@mail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
