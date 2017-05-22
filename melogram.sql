-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2017 a las 00:04:43
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
('LosRockeros', 'Rock', 30, 55),
('MC\'s', 'HipHop', 20, 30),
('Metaleros', 'Metal', 21, 36),
('Monderos', 'Techno', 20, 25),
('ZionLion', 'Reggae', 18, 50);

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
('gabri', 'Metaleros'),
('axel', 'Monderos'),
('pepe', 'ZionLion'),
('martins', 'Monderos');

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
(1, 'diego', 'axel', 'Hola chavales', 'Buenaaas, me acabo de hacer cuenta en Melogram, y mola demasiado!!!', '2017-05-22'),
(2, 'diego', 'charly', 'Hola chavales', 'Buenaaas, me acabo de hacer cuenta en Melogram, y mola demasiado!!!', '2017-05-22'),
(3, 'diego', 'chavi', 'Hola chavales', 'Buenaaas, me acabo de hacer cuenta en Melogram, y mola demasiado!!!', '2017-05-22'),
(4, 'diego', 'gabri', 'Hola chavales', 'Buenaaas, me acabo de hacer cuenta en Melogram, y mola demasiado!!!', '2017-05-22'),
(5, 'diego', 'ines', 'Hola chavales', 'Buenaaas, me acabo de hacer cuenta en Melogram, y mola demasiado!!!', '2017-05-22'),
(6, 'diego', 'martins', 'Hola chavales', 'Buenaaas, me acabo de hacer cuenta en Melogram, y mola demasiado!!!', '2017-05-22'),
(7, 'diego', 'pepe', 'Hola chavales', 'Buenaaas, me acabo de hacer cuenta en Melogram, y mola demasiado!!!', '2017-05-22'),
(8, 'axel', 'diego', 'Bienvenido', 'Hola Diego, bienvenido a Melogram! ', '2017-05-22'),
(9, 'ines', 'axel', 'Jazz', 'Me encanta el Jazz!', '2017-05-22'),
(10, 'ines', 'charly', 'Jazz', 'Me encanta el Jazz!', '2017-05-22'),
(11, 'ines', 'chavi', 'Jazz', 'Me encanta el Jazz!', '2017-05-22'),
(12, 'ines', 'diego', 'Jazz', 'Me encanta el Jazz!', '2017-05-22'),
(13, 'ines', 'gabri', 'Jazz', 'Me encanta el Jazz!', '2017-05-22'),
(14, 'ines', 'martins', 'Jazz', 'Me encanta el Jazz!', '2017-05-22'),
(15, 'ines', 'pepe', 'Jazz', 'Me encanta el Jazz!', '2017-05-22'),
(16, 'martins', 'axel', 'Mondo Jueves (Monderos)', 'Hola chicos, alguien va a Mondo este jueves?? Pincha Solomun!', '2017-05-22'),
(17, 'axel', 'martins', 'Re: Mondo Jueves (Monderos)', 'Yo voy macho, habra que pillar entradas que se va a llenar.', '2017-05-22'),
(25, 'chavi', 'axel', 'Country', 'La mejor musica es el country y lo sabeis!', '2017-05-22'),
(26, 'chavi', 'charly', 'Country', 'La mejor musica es el country y lo sabeis!', '2017-05-22'),
(27, 'chavi', 'diego', 'Country', 'La mejor musica es el country y lo sabeis!', '2017-05-22'),
(28, 'chavi', 'gabri', 'Country', 'La mejor musica es el country y lo sabeis!', '2017-05-22'),
(29, 'chavi', 'ines', 'Country', 'La mejor musica es el country y lo sabeis!', '2017-05-22'),
(30, 'chavi', 'martins', 'Country', 'La mejor musica es el country y lo sabeis!', '2017-05-22'),
(31, 'chavi', 'pepe', 'Country', 'La mejor musica es el country y lo sabeis!', '2017-05-22');

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
('charly', 'charly', 23, 'House'),
('chavi', 'chavi', 23, 'Country'),
('diego', 'diego', 23, 'Rock'),
('gabri', 'gabri', 22, 'Metal'),
('ines', '1234', 49, 'Jazz'),
('martins', 'martins', 22, 'Techno'),
('pepe', '1234', 31, 'Reggae');

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
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
