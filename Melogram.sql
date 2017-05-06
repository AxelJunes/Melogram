-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2017 at 10:26 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Melogram`
--

-- --------------------------------------------------------

--
-- Table structure for table `Generos`
--

CREATE TABLE `Generos` (
  `Genero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Generos`
--

INSERT INTO `Generos` (`Genero`) VALUES
('Country'),
('HipHop'),
('House'),
('Indie'),
('Metal'),
('Pop'),
('Reggae'),
('Reggaeton'),
('Rock'),
('Techno');

-- --------------------------------------------------------

--
-- Table structure for table `Grupos`
--

CREATE TABLE `Grupos` (
  `Nombre` varchar(20) NOT NULL,
  `Genero` varchar(20) NOT NULL,
  `EdadMin` int(3) NOT NULL,
  `EdadMax` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Grupos`
--

INSERT INTO `Grupos` (`Nombre`, `Genero`, `EdadMin`, `EdadMax`) VALUES
('HijosDelMal', 'Metal', 18, 50),
('MCs', 'HipHop', 18, 30);

-- --------------------------------------------------------

--
-- Table structure for table `Mensajes`
--

CREATE TABLE `Mensajes` (
  `Id` int(20) NOT NULL,
  `Emisor` varchar(20) NOT NULL,
  `Receptor` varchar(20) DEFAULT NULL,
  `Grupo` varchar(20) DEFAULT NULL,
  `Asunto` varchar(30) DEFAULT NULL,
  `Mensaje` text NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Usuarios`
--

CREATE TABLE `Usuarios` (
  `Nombre` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Edad` int(3) NOT NULL,
  `Grupo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Usuarios`
--

INSERT INTO `Usuarios` (`Nombre`, `Password`, `Edad`, `Grupo`) VALUES
('admin', 'admin', 0, NULL),
('axel', 'axel', 22, 'MCs'),
('gabri', 'gabri', 22, 'HijosDelMal'),
('martins', 'martins', 22, 'MCs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Generos`
--
ALTER TABLE `Generos`
  ADD PRIMARY KEY (`Genero`);

--
-- Indexes for table `Grupos`
--
ALTER TABLE `Grupos`
  ADD PRIMARY KEY (`Nombre`),
  ADD UNIQUE KEY `Genero` (`Genero`);

--
-- Indexes for table `Mensajes`
--
ALTER TABLE `Mensajes`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Emisor` (`Emisor`),
  ADD UNIQUE KEY `Grupo` (`Grupo`),
  ADD KEY `Receptor` (`Receptor`);

--
-- Indexes for table `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`Nombre`),
  ADD KEY `Grupo` (`Grupo`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Grupos`
--
ALTER TABLE `Grupos`
  ADD CONSTRAINT `Grupos_ibfk_1` FOREIGN KEY (`Genero`) REFERENCES `Generos` (`Genero`);

--
-- Constraints for table `Mensajes`
--
ALTER TABLE `Mensajes`
  ADD CONSTRAINT `Mensajes_ibfk_1` FOREIGN KEY (`Emisor`) REFERENCES `Usuarios` (`Nombre`),
  ADD CONSTRAINT `Mensajes_ibfk_2` FOREIGN KEY (`Receptor`) REFERENCES `Usuarios` (`Nombre`),
  ADD CONSTRAINT `Mensajes_ibfk_3` FOREIGN KEY (`Grupo`) REFERENCES `Grupos` (`Nombre`);

--
-- Constraints for table `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD CONSTRAINT `Usuarios_ibfk_1` FOREIGN KEY (`Grupo`) REFERENCES `Grupos` (`Nombre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
