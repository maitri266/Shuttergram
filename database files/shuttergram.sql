-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 03:33 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shuttergram`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `user` varchar(25) NOT NULL,
  `post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`user`, `post`) VALUES
('myronic', 1),
('myronic', 2),
('shutter0_0eye', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postId` int(11) NOT NULL,
  `postUser` varchar(25) NOT NULL,
  `media` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `postTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postId`, `postUser`, `media`, `caption`, `postTime`) VALUES
(1, 'myronic', 'myronic/myronic5be16e2f1fa05.jpg', 'Frozen Hands', '2018-11-06 10:34:33'),
(2, 'myronic', 'myronic/myronic5be16e6e3e63c.jpg', 'Sunrise Point \r\nWhat a beautiful Memory It was\r\njust so bautiful', '2018-11-06 10:35:50'),
(3, 'shutter0_0eye', 'shutter0_0eye/shutter0_0eye5be17b8dcfe22.jpg', 'Beautiful Sun', '2018-11-06 11:31:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` text,
  `email` varchar(25) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) DEFAULT NULL,
  `dp` varchar(255) NOT NULL DEFAULT 'shuttergramDefault.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `username`, `password`, `dp`) VALUES
('Myron Carvalho', 'myron.c@somaiya.edu', 'myronic', 'myronic', 'shuttergramDefault.png'),
('Jash Gopani', 'jash.gopani@somaiya.edu', 'shutter0_0eye', 'jash851999', 'shuttergramDefault.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`user`,`post`),
  ADD UNIQUE KEY `user` (`user`,`post`),
  ADD KEY `post` (`post`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postId`),
  ADD KEY `postUser` (`postUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`post`) REFERENCES `post` (`postId`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`postUser`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
