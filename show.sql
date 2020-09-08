-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2020 at 08:18 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `show`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `username` varchar(100) NOT NULL,
  `moviename` varchar(100) NOT NULL,
  `showtiming` varchar(100) NOT NULL,
  `hall` varchar(100) NOT NULL,
  `bookedSeats` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`username`, `moviename`, `showtiming`, `hall`, `bookedSeats`) VALUES
('shobha', 'frozen', '12pm to 3pm', 'A', '1');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `moviename` varchar(100) NOT NULL,
  `showtiming` varchar(100) NOT NULL,
  `hall` varchar(100) NOT NULL,
  `seats` varchar(100) NOT NULL,
  `available` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`moviename`, `showtiming`, `hall`, `seats`, `available`) VALUES
('frozen', '12pm to 3pm', 'A', '100', '99'),
('the boss baby', '2pm to 5pm', 'B', '100', '100'),
('the nut job', '12pm to 3pm', 'C', '100', '100'),
('under water', '6pm to 9pm', 'A', '100', '100'),
('lucy', '2pm to 5pm', 'D', '100', '100'),
('dolittle', '6pm to 9pm', 'C', '100', '100'),
('jumanji', '9pm to 12am', 'B', '100', '100'),
('Shutter Island', '9pm to 12am', 'D', '100', '100'),
('aladin', '6pm to 9pm', 'B', '50', '50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `confirm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `phone`, `confirm`) VALUES
('sharad', 'sha@gmail.com', '123', '8738473847', '1'),
('abc', 'a@gmai.com', '100', '9874562131', '1'),
('aaloo', 'aaloo@gmail.com', '147', '123456789', '0');
