-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 10:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rppo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `department` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `department`, `username`, `password`, `type`) VALUES
(1, 'rushikesh ', 'kulkarni', 'RPPO', 'rushi', 'rushi@123', 1),
(2, 'RRRkkkkkkkkkk', 'j', 'PPO', 'dkfskdf', 'jdkfjkjsd', 0),
(3, 'jk', 'j', 'PPO', 'j', 'j', 0),
(4, 'ssk', 'kkj', 'PPO', 'jk', 'k', 0),
(5, 'ssk', 'kkj', 'PPO', 'jk', 'k', 0),
(6, 'djrajesh', 'j', 'RPPO', 'j', 'j', 0),
(7, 'skdfj', 'kjk', 'PPO', 'kk', 'jjkjskdj', 0),
(8, 'skdfj', 'kjk', 'PPO', 'kk', 'jjkjskdj', 0),
(9, 'skdfj', 'kjk', 'PPO', 'kk', 'jjkjskdj', 0),
(10, 'skdfj', 'kjk', 'PPO', 'kk', 'jjkjskdj', 0),
(11, 'asfjh', 'hsjh', 'PPO', 'jhsdj', 'jshj', 0),
(12, 'dsn', 'dfjkj', 'PPO', 'dkfk', 'kdfjk', 0),
(13, 'skdfjks', 'jdfkjak', 'PPO', 'asdjfkj', 'djfkjdf', 0),
(14, 'sdfjk', 'kjdk', 'PPO', 's', 'asdk', 0),
(15, 'Rushikesh', 'Kulkarni', 'PPO', 'rushsh', 'sddjfkjfk', 0),
(16, 'rushi', 'kulkarni ', 'PPO', 'j', 'j', 0),
(17, 'rushikesh', 'ssskuslkasd', 'PPO', 'kdj', 'd', 0),
(18, 'kkdkkdkdkddk', 'kamar', 'PPO', 'l', 'l', 0),
(19, 'suresh', 'raina', 'PPO', 'ushe', 'dfdk', 0),
(20, 'dfkjd', 'kjkd', 'PPO', 'dfk', 'fkjd', 0),
(21, 'steve', 'smith_pigkdkd', 'PPO', 'str', 'dk', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
