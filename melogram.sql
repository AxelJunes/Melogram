-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2017 a las 00:42:58
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `melogram`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genres`
--

CREATE TABLE `genres` (
  `id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genres`
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
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` varchar(20) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `min_age` int(10) NOT NULL,
  `max_age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `genre`, `min_age`, `max_age`) VALUES
('Guays', 'Pop', 25, 55),
('Los Hijos del Metal', 'Metal', 15, 60),
('LosRockeros', 'Rock', 30, 55),
('MC\'s', 'HipHop', 20, 30),
('Metaleros', 'Metal', 21, 36),
('Monderos', 'Techno', 20, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `members`
--

CREATE TABLE `members` (
  `user` varchar(20) NOT NULL,
  `chat_group` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `members`
--

INSERT INTO `members` (`user`, `chat_group`) VALUES
('gabri', 'Los Hijos del Metal'),
('gabri', 'Metaleros'),
('Eduardo', 'MC\'s'),
('axel', 'Monderos'),
('stefan', 'LosRockeros'),
('guille', 'Guays'),
('ines', 'Guays');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(20) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `m_text` text NOT NULL,
  `m_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `sender`, `receiver`, `subject`, `m_text`, `m_date`) VALUES
(0, 'axel', 'gabri', 'Bienvenido', 'Hola tio, bienvenido a melogram.\r\nUn saludo.', '2017-05-17'),
(1, 'gabri', 'axel', 'Re: Bienvenido', 'Muchas gracias! Espero verte pronto.\r\nUn abrazo.', '2017-05-17'),
(2, 'axel', 'guille', 'Concierto', 'Que pasa guille, vas al concierto de Metallica el viernes?', '2017-05-17'),
(3, 'stefan', 'axel', 'Hola', 'Quiero tocar en tu grupo.', '2017-05-17'),
(4, 'axel', 'stefan', 'Re: Hola', 'Vale, necesito un guitarrista.', '2017-05-17'),
(5, 'ines', 'axel', 'Difundido', 'Hola, este es mi primer mensaje difundido!!', '2017-05-17'),
(6, 'ines', 'Eduardo', 'Difundido', 'Hola, este es mi primer mensaje difundido!!', '2017-05-17'),
(7, 'ines', 'gabri', 'Difundido', 'Hola, este es mi primer mensaje difundido!!', '2017-05-17'),
(8, 'ines', 'guille', 'Difundido', 'Hola, este es mi primer mensaje difundido!!', '2017-05-17'),
(9, 'ines', 'stefan', 'Difundido', 'Hola, este es mi primer mensaje difundido!!', '2017-05-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` int(10) DEFAULT NULL,
  `music` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `password`, `age`, `music`) VALUES
('admin', 'admin', NULL, NULL),
('axel', 'axel', 22, 'Techno'),
('Eduardo', '1234', 25, 'HipHop'),
('gabri', 'gabri', 22, 'Metal'),
('guille', '1234', 30, 'Pop'),
('ines', 'ines', 49, 'Pop'),
('stefan', 'stefan', 50, 'Rock');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre` (`genre`);

--
-- Indices de la tabla `members`
--
ALTER TABLE `members`
  ADD KEY `user` (`user`),
  ADD KEY `chat_group` (`chat_group`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender` (`sender`),
  ADD KEY `receiver` (`receiver`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `music` (`music`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`genre`) REFERENCES `genres` (`id`);

--
-- Filtros para la tabla `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`chat_group`) REFERENCES `groups` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`music`) REFERENCES `genres` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
