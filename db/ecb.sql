-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 11:30 AM
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
-- Database: `ecb`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginusers`
--

CREATE TABLE `loginusers` (
  `id` int(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginusers`
--

INSERT INTO `loginusers` (`id`, `username`, `password`, `status`) VALUES
(64, '123456789123', '1bb7b8f7f14d657e1fa9e55223d8ec48', 'ACTIVE'),
(63, '123456789124', '1244ae1a1edde130b4f494fa0daea357', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'NOTVOTED',
  `voted` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`firstname`, `lastname`, `username`, `status`, `voted`) VALUES
('Nabarun', 'Halder', '123456789123', 'VOTED', 'Hammer'),
('Ratul', 'Osman', '123456789124', 'VOTED', 'Boat');

-- --------------------------------------------------------

--
-- Table structure for table `vote_results`
--

CREATE TABLE `vote_results` (
  `serial` int(100) NOT NULL,
  `symbol_name` varchar(10) NOT NULL,
  `party_name` varchar(255) NOT NULL,
  `votecount` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote_results`
--

INSERT INTO `vote_results` (`serial`, `symbol_name`, `party_name`, `votecount`) VALUES
(1, 'Boat', 'Awami', 5),
(2, 'Paddy', 'BNP', 5),
(3, 'Plough', 'JP', 7),
(4, 'Sickle', 'Communist', 4),
(5, 'Hammer', 'Workers ', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginusers`
--
ALTER TABLE `loginusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vote_results`
--
ALTER TABLE `vote_results`
  ADD PRIMARY KEY (`serial`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginusers`
--
ALTER TABLE `loginusers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `vote_results`
--
ALTER TABLE `vote_results`
  MODIFY `serial` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
