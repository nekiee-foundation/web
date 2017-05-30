-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2017 at 03:36 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neikee`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `camp_id` varchar(32) NOT NULL,
  `camp_name` varchar(100) NOT NULL,
  `camp_target` int(10) NOT NULL,
  `camp_desc` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`camp_id`, `camp_name`, `camp_target`, `camp_desc`) VALUES
('sd4f5sgd', 'Educate Children', 50000, 'Educate Children Campaign'),
('arf4gf54d3g6', 'Child Camps', 500000, 'Child Camps Campaign'),
('sfd4g5dsdgf', 'Clean Water for Life', 100000, 'Clean water for life campaign'),
('n685dg4fds', 'Campaign for Child Poverty', 300000, 'Campaign for Child Poverty');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `trans_id` varchar(32) NOT NULL,
  `user_id` varchar(32) NOT NULL,
  `camp_id` varchar(32) NOT NULL,
  `trans_amt` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`trans_id`, `user_id`, `camp_id`, `trans_amt`, `status`) VALUES
('MOJO7529005A96478048', 'himanshuk27@gmail.com', 'Array\n(\n)\n', 500, 'Credit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(32) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `walletid` varchar(10) DEFAULT NULL,
  `verify` int(1) NOT NULL DEFAULT '0',
  `walletbal` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `name`, `password`, `email`, `walletid`, `verify`, `walletbal`) VALUES
('2868677b280fb3a9', 'himanshuk27', 'Himanshu', 'YWRtaW4=', 'himanshuk27@gmail.com', NULL, 0, 0),
('264d1e4881cc312b1b97b8b1b8611ced', 'fdg', 'sdf', 'YXNk', 'dsf@dfg.c', NULL, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`camp_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
