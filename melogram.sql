-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2017 at 05:20 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `melogram`
--

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`) VALUES
('Blues'),
('Clasica'),
('Country'),
('HipHop'),
('House'),
('Jazz'),
('Metal'),
('Pop'),
('Rap'),
('Reggae'),
('Rock'),
('Techno');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` varchar(20) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `min_age` int(10) NOT NULL,
  `max_age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `genre`, `min_age`, `max_age`) VALUES
('Los Hijos del Metal', 'Metal', 15, 60),
('MC\'s', 'HipHop', 20, 30),
('Metaleros', 'Metal', 21, 36),
('Tecnazo Maximo', 'Techno', 18, 40),
('Yeah', 'Metal', 5, 100);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `user` varchar(20) NOT NULL,
  `chat_group` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`user`, `chat_group`) VALUES
('axel', 'Tecnazo Maximo'),
('gabri', 'Los Hijos del Metal'),
('gabri', 'Metaleros'),
('Eduardo', 'MC\'s'),
('gabri', 'Yeah');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(20) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `m_text` text NOT NULL,
  `m_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` int(10) DEFAULT NULL,
  `music` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `age`, `music`) VALUES
('admin', 'admin', NULL, NULL),
('axel', 'axel', 22, 'Techno'),
('Eduardo', '1234', 25, 'HipHop'),
('gabri', 'gabri', 22, 'Metal'),
('guille', '1234', 30, 'Pop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre` (`genre`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD KEY `user` (`user`),
  ADD KEY `chat_group` (`chat_group`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender` (`sender`),
  ADD KEY `receiver` (`receiver`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `music` (`music`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`genre`) REFERENCES `genres` (`id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`chat_group`) REFERENCES `groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`music`) REFERENCES `genres` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
